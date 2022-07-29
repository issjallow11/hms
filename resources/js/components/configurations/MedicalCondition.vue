<template>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header bg-blue">
        <h3 class="card-title text-center">Medical Conditions</h3>
        <div class="card-tools">
          <button type="button" @click="newModal" class="btn btn-sm btn-primary" data-toggle="modal"
            data-target="#exampleModal">
            <i class="fas fa-use">Add Medical Condition</i>
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
            <div class="text-center" v-if="!medicalConditions.length"><span>No data available</span></div>
            <tr v-for="medicalCondition in medicalConditions" :key="medicalCondition.id">
              <td>{{ medicalCondition.id }}</td>
              <td>{{ medicalCondition.name }}</td>
              <td>
                <button @click="editModal(medicalCondition)" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-edit blue"></i>
                </button>
                <button @click="deleteMedicalCondition(medicalCondition.id)">
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
                <h5 class="modal-title" id="exampleModalLabel">Add Medical Condtion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form @submit.prevent="editmode ? updateMedicalCondition() : addMedicalCondition()">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="">MedicalCondition</label>
                    <input v-model="form.name" type="text" name="name" class="form-control"
                      :class="{ 'is-invalid': form.errors.has('name') }" />
                    <has-error :form="form" field="name"></has-error>
                  </div>
                </div>
                <div class="modal-footer">
                  <button v-show="!editmode" :disabled="loading" type="submit" class="btn btn-primary float-left">Save
                    changes</button>
                  <button v-show="editmode" :disabled="loading" type="submit" class="btn btn-primary float-left">Update
                    changes</button>
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
      loading: false,
      medicalConditions: {},
      form: new Form({
        id: '',
        name: '',
      })
    }
  },
  methods: {
    loadMedicalConditions() {
      axios.get('/api/medicalCondition')
        .then(({ data }) => {
          if (data.success) {
            this.loading = false;
            this.medicalConditions = data.data;
          }
        })
        .catch(({ err }) => {
          console.log(err);
        })
    },

    editModal(medicalCondition) {
      this.editmode = true;
      this.form.reset();
      $('#exampleModal').modal('show');
      this.form.fill(medicalCondition);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $('#exampleModal').modal('show');
    },

    addMedicalCondition() {
      this.$Progress.start();
      this.loading = true;
      this.form.post('/api/medicalCondition')
        .then((data) => {
          if (data.success) {
            $('#exampleModal').modal('hide');

            Toast.fire({
              icon: 'success',
              title: data.message
            });
            this.$Progress.finish();
            this.loadMedicalConditions();

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

    updateMedicalCondition() {
      this.$Progress.start();
      this.loading = true;
      this.form.put('/api/medicalCondition/' + this.form.id)
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
          this.loadMedicalConditions();
          // this.loadVisits();
        })
        .catch(() => {
          this.loading = false
          this.$Progress.fail();
        });

    },

    deleteMedicalCondition(id) {
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
            .delete("/api/medicalCondition/" + id)
            .then(() => {
              Swal.fire("Deleted!", "Tribe deleted Succesfully.", "success");
              // Fire.$emit('AfterCreate');
              this.loadMedicalConditions();
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
    this.loadMedicalConditions();
    this.$Progress.finish();
  }

}
</script>

<style>
</style>