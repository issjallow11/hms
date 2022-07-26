<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h3 class="card-title">Clients List</h3>
              <div class="card-tools">

                <router-link to="/client/Register">
                  <button class="btn btn-sm btn-primary">
                    <i class="fa fa-user-plus">
                      Add Patient
                    </i>
                  </button>
                </router-link>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <!-- spinner -->
              <div v-if="loading" class="text-center">
                <div class="spinner-border text-danger">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Clinic N0:</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Nationality</th>
                    <th>Marital Status</th>
                    <th>Medical History</th>
                    <th>Telephone Number</th>
                    <th>Occupation</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="client in getClients" :key="client.clinic_no">
                    <td>{{ client.clinic_no }}</td>
                    <td>{{ client.first_name }} {{ client.middle_name }} {{ client.last_name }}</td>
                    <td>{{ client.address }}</td>
                    <td>{{ client.date_of_birth ? client.date_of_birth : 'N/A' }}</td>
                    <!-- <td>{{client.last_name | truncate(30, '...')}}</td> -->
                    <!-- <td v-for="gend in client.gender" :key="gend.id">{{ gend.name }}</td> -->
                    <td>{{ client.gender.name }}</td>
                    <td>{{ client.nationality }}</td>
                    <td>{{ client.marriage }} {{ client.marital_status }}</td>
                    <td v-for="medical_history in client.medical_history" :key="medical_history.id">
                      {{ medical_history.medical_history }}</td>
                    <!-- <td>{{client.medical_history ? client.medical_history[0].medical_history : N/A}}</td> -->
                    <td>{{ client.telephone_1 }}</td>
                    <td>{{ client.occupation.name }}</td>

                    <!-- <td><img v-bind:src="'/' + product.photo" width="100" alt="product"></td> -->
                    <td>
                      <router-link :to="{ name: 'clientsShow', params: { id: client.clinic_no } }">
                        <i class="fa fa-eye green"></i>
                      </router-link>/
                      <router-link :to="{ name: 'clientEdit', params: { id: client.clinic_no } }">
                        <i class="fas fa-edit blue"></i>
                      </router-link>
                      /
                      <a v-if="$gate.isAdmin()" href="#" @click="deleteClient(client.clinic_no)">
                        <i class="fa fa-trash red"></i>
                      </a>
                    </td>
                  </tr>
                  <!-- <div  v-if="clients.length == 0">
                        <div class="col-12 d-flex justify-content-center text-center">
                            <h4>No Data Found</h4>
                        </div>
                    </div> -->
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <!-- <pagination :data="clients" @pagination-change-page="getResults"></pagination> -->
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" v-show="!editmode">Create New Product</h5>
              <h5 class="modal-title" v-show="editmode">Edit Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form @submit.prevent="editmode ? updateProduct() : createProduct()">
              <div class="modal-body">
                <div class="form-group">
                  <label>Name</label>
                  <input v-model="form.name" type="text" name="name" class="form-control"
                    :class="{ 'is-invalid': form.errors.has('name') }">
                  <has-error :form="form" field="name"></has-error>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input v-model="form.description" type="text" name="description" class="form-control"
                    :class="{ 'is-invalid': form.errors.has('description') }">
                  <has-error :form="form" field="description"></has-error>
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input v-model="form.price" type="text" name="price" class="form-control"
                    :class="{ 'is-invalid': form.errors.has('price') }">
                  <has-error :form="form" field="price"></has-error>
                </div>
                <div class="form-group">

                  <label>Category</label>
                  <select class="form-control" v-model="form.category_id">
                    <option v-for="(cat, index) in categories" :key="index" :value="index"
                      :selected="index == form.category_id">{{ cat }}</option>
                  </select>
                  <has-error :form="form" field="category_id"></has-error>
                </div>
                <div class="form-group">
                  <label>Tags</label>
                  <vue-tags-input v-model="form.tag" :tags="form.tags" :autocomplete-items="filteredItems"
                    @tags-changed="newTags => form.tags = newTags" />
                  <has-error :form="form" field="tags"></has-error>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
                <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script>
import VueTagsInput from '@johmun/vue-tags-input';

export default {
  components: {
    VueTagsInput,
  },
  data() {
    return {
      editmode: false,
      clients: {},
      loading: false,
      form: new Form({
        id: '',
        category: '',
        name: '',
        description: '',
        tags: [],
        photo: '',
        category_id: '',
        price: '',
        photoUrl: '',
      }),
      categories: [],

      tag: '',
      autocompleteItems: [],
    }
  },
  methods: {

    // getResults(page = 1) {

    //     this.$Progress.start();

    //     axios.get('api/clients?page=' + page).then(({ data }) => (this.clients = data.data));

    //     this.$Progress.finish();
    // },
    // loadClients() {
    //   // if(this.$gate.isAdmin()){
    //   this.loading = true;
    //   axios.get("api/clients").then(({ data }) => {
    //     if (data.success) {
    //       this.loading = false
    //       this.clients = data.data
    //     }
    //   });

    //   // }
    // },

    deleteClient(id) {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {

        // Send request to the server
        if (result.value) {
          this.form.delete('api/clients/' + id).then(() => {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            );
            // Fire.$emit('AfterCreate');
            this.loadClients();
          }).catch((data) => {
            Swal.fire("Failed!", data.message, "warning");
          });
        }
      })
    },

  },
  mounted() {
    this.$store.dispatch('getClientsFromDB')
  },
  created() {
    this.$Progress.start();

    // this.loadClients();
    // this.loadCategories();
    // this.loadTags();

    this.$Progress.finish();
  },
  filters: {
    truncate: function (text, length, suffix) {
      return text.substring(0, length) + suffix;
    },
  },
  computed: {
    filteredItems() {
      return this.autocompleteItems.filter(i => {
        return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
      });
    },

    //calculates the age of the person
    calAge() {
      let today = new Date();
      let d = new Date(this.date_of_birth)
      const m = today.getMonth() - d.getMonth();
      let age = today.getFullYear() - d.getFullYear();

      if (m < 0 || (m === 0 && today.getDate() < this.d.getDate())) {
        age = age - 1;
      }
      return age;
    },
    getClients() {
      return this.$store.getters.getClients
    }
    // name() {
    //   return $this.forms
    // }
  },
}
</script>
