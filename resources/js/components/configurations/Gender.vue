<template>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header bg-blue">
        <h3 class="card-title text-center">Gender</h3>
        <div class="card-tools">
          <button type="button" @click="newModal" class="btn btn-sm btn-primary" data-toggle="modal"
            data-target="#exampleModal">
            <i class="fas fa-use">Add Gender</i>
          </button>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <div v-if="loading" class="text-center">
          <div class="spinner-border text-danger">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            <div class="text-center" v-if="!genders.length"><span>No data available</span></div>
            <tr v-for="gender in genders" :key="gender.id">
              <td>{{ gender.id }}</td>
              <td>{{ gender.name }}</td>
              <td>
                <button @click="editModal(gender)" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-edit blue"></i>
                </button>
                <button @click="deleteGender(gender.id)">
                  <i class="fas fa-trash red"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Gender</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form @submit.prevent="editmode ? updateGender() : addGender()">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="">Gender</label>
                    <input v-model="form.name" type="text" name="name" class="form-control"
                      :class="{ 'is-invalid': form.errors.has('name') }" />
                    <has-error :form="form" field="name"></has-error>
                  </div>
                </div>
                <div class="modal-footer">
                  <button v-show="!editmode" :disabled="loading" type="submit" class="btn btn-primary float-left">Save
                    changes</button>
                  <button v-show="editmode" :disabled="loading" type="submit" class="btn btn-primary float-left">Update changes</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- <form action="">
        <div class="card-body"></div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary ">
            <i class="fa fa-paper-plane">submit</i>
          </button>
          <router-link to="/visitors" class="text-white float-right">
            <button class="btn btn-danger">
              Back
            </button>
          </router-link>
        </div> -->
      <!-- </form> -->
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      editmode: false,
      loading: true,
      genders: {},
      form: new Form({
        id: '',
        name: '',
      })
    }
  },
  methods: {
    loadGender() {
      axios.get('/api/gender')
        .then(({ data }) => {
          if (data.success) {
            this.loading = false;
            this.genders = data.data;
          }
        })
        .catch(({ err }) => {
          console.log(err);
        })
    },

    editModal(gender) {
      this.editmode = true;
      this.form.reset();
      $('#exampleModal').modal('show');
      this.form.fill(gender);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $('#exampleModal').modal('show');
    },

    addGender() {
      this.$Progress.start();
      this.loading = true;
      this.form.post('/api/gender')
        .then((data) => {
          if (data.data.success) {
            $('#exampleModal').modal('hide');

            Toast.fire({
              icon: 'success',
              title: data.data.message
            });
            this.$Progress.finish();
            this.loadGender();

          } else {
            Toast.fire({
              icon: 'error',
              title: 'Some error occured! Please try again'
            });

            this.$Progress.failed();
          }
        })
        .catch(() => {
          this.loading = false
          Toast.fire({
            icon: 'error',
            title: 'Some error occured! Please try again'
          });
        })
    },

    updateGender() {
      this.$Progress.start();
      this.loading = true;
      this.form.put('/api/gender/' + this.form.id)
        .then((response) => {
          // success
          $('#exampleModal').modal('hide');
          Toast.fire({
            icon: 'success',
            title: response.data.message
          });
          this.$Progress.finish();
          //  Fire.$emit('AfterCreate');
          this.loading = false;
          this.loadGender();
          // this.loadVisits();
        })
        .catch(() => {
          this.loading = false
          this.$Progress.fail();
        });

    },

    deleteGender(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        // Send request to the server
        if (result.value) {
          this.form
            .delete("/api/gender/" + id)
            .then(() => {
              Swal.fire("Deleted!", "Tribe deleted Succesfully.", "success");
              // Fire.$emit('AfterCreate');
              this.loadGender();
            })
            .catch((data) => {
              Swal.fire("Failed!", data.message, "warning");
            });
        }
      });
    }
  },
  created() {
    this.$Progress.start();
    this.loadGender();
    this.$Progress.finish();
  }

}
</script>

<style>
</style>