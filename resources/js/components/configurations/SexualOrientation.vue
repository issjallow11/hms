<template>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header bg-blue">
        <h3 class="card-title text-center">Sexual Orientation</h3>
        <div class="card-tools">
          <button type="button" @click="newModal" class="btn btn-sm btn-primary" data-toggle="modal"
            data-target="#exampleModal">
            <i class="fas fa-plus">Add</i>
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
            <!-- <div class="text-center" v-if="!sexualOrientation.length"><span>No data available</span></div> -->
            <tr v-if="!sexualOrientation" class="text-center text-blue"><td colspan="3"><h3>No Data Available</h3></td></tr>
            <tr v-for="sex in sexualOrientation" :key="sex.id">
              <!-- <td><span>NO data available</span></td> -->
              <td>{{ sex.id }}</td>
              <td>{{ sex.name }}</td>
              <td>
                <button @click="editModal(sex)" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-edit blue"></i>
                </button>
                <button @click="deleteSex(sex.id)">
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
                <h5 class="modal-title" id="exampleModalLabel">Add Sexual Orientation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form @submit.prevent="editmode ? updateSex() : addSex()">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="">Sexual Orientation</label>
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
      sexualOrientation: {},
      form: new Form({
        id: '',
        name: '',
      })
    }
  },
  methods: {
    loadSex() {
      axios.get('/api/sex')
        .then(({ data }) => {
          if (data.success) {
            this.loading = false;
            this.sexualOrientation = data.data;
          }
        })
        .catch(({ err }) => {
          console.log(err);
        })
    },

    editModal(sex) {
      this.editmode = true;
      this.form.reset();
      $('#exampleModal').modal('show');
      this.form.fill(sex);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $('#exampleModal').modal('show');
    },

    addSex() {
      this.$Progress.start();
      this.loading = true;
      this.form.post('/api/sex')
        .then((data) => {
          if (data.data.success) {
            $('#exampleModal').modal('hide');

            Toast.fire({
              icon: 'success',
              title: data.data.message
            });
            this.$Progress.finish();
            this.loadSex();

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

    updateSex() {
      this.$Progress.start();
      this.loading = true;
      this.form.put('/api/sex/' + this.form.id)
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
          this.loadSex();
          // this.loadVisits();
        })
        .catch(() => {
          this.loading = false
          this.$Progress.fail();
        });

    },

    deleteSex(id) {
      // console.log(id);
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
            .delete("/api/sex/" + id)
            .then(() => {
              Swal.fire("Deleted!", "Sexual Orientation deleted Succesfully.", "success");
              // Fire.$emit('AfterCreate');
              this.loadSex();
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
    this.loadSex();
    this.$Progress.finish();
  }

}
</script>

<style>
</style>