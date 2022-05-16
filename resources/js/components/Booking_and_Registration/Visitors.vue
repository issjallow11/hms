<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h3 class="card-title text-center">Arrival & Booking Schedule</h3>
              <div v-if="$gate.isAdmin()" class="card-tools">
                  <router-link to="/visitors/add">
                    <button class="btn btn-sm btn-primary">
                      <i class="fa fas-user-visor">
                        Add Visit
                      </i>
                    </button>
                  </router-link>
              </div>
            </div>
            <!-- spinner -->
            <div v-if="loading" class="text-center">
              <div class="spinner-border text-danger">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>N0:</th>
                    <th>Arrival / Appointment Time</th>
                    <th>Client No:</th>
                    <th>Clent Name</th>
                    <th>Reason For Visit</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    <th>Seen By</th>
                    <th>Clinical Module</th>
                    <!-- <th>Attend</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="visit in visits.data" :key="visit.id">
                    <td>{{visit.id}}</td>
                    <td>{{visit.created_at | formatDate}}</td>
                    <td>{{visit.client_id}}</td>
                    <td>{{visit.client.first_name}} {{visit.client.middle_name}} {{visit.client.last_name}}</td>
                    <td >{{visit.reason_for_visiting}}</td>
                    <td > 
                      <span v-if="visit.status == 'Arrived, waiting to be seen (A)'" class="badge" id="arrived">{{visit.status}}</span>
                      <span v-if="visit.status == 'Being seen (B)'" class="badge" id="seen">{{visit.status}}</span>
                      <span v-if="visit.status == 'Completed (C)'" class="badge" id="completed">{{visit.status}}</span>
                      <span v-if="visit.status == 'Referred (R)'" class="badge" id="referred">{{visit.status}}</span>
                      <span v-if="visit.status == 'Walked away (W)'" class="badge" id="walked">{{visit.status}}</span>
                      <span v-if="visit.status == 'Did not attend appointment (DNA)'" class="badge" id="DNA">{{visit.status}}</span>                                                                                        
                    </td>
                    <td>{{visit.remarks ? visit.remarks : 'N/A' }}</td>
                    <td>{{visit.user_id ? visit.user.name : 'No One Yet'}}</td>
                    <td>
                      <button type="button" data-toggle="modal" @click="setVisitorId(visit.id,visit.client_id)" data-target="#clinicalModal">
                        <router-link to="#">
                          <i class="fas fa-clinic-medical"></i>
                        </router-link>
                      </button>
                    </td>
                    <!-- <td v-else><span class="text-blue">Patient Being Attended To!</span> </td> -->
                    <!-- <td>
                      <button class="btn btn-sm btn-success">
                        Attend
                      </button>
                      <button class="btn btn-sm btn-danger">
                        Cancell
                      </button>
                    </td> -->
                    <!-- <td><img v-bind:src="'/' + product.photo" width="100" alt="product"></td> -->
                    <td>
                      <!-- <router-link
                        :to="{ name: 'clientsShow', params: { id: client.id } }"
                      >
                        <i class="fa fa-eye green"></i> </router-link
                      > -->
                      /
                      <a href="#" @click="editModal(visit)">
                        <i class="fa fa-edit blue"></i>
                      </a>
                      /
                      <a
                        v-if="$gate.isAdmin()"
                        href="#"
                        @click="deleteClient(visit.id)"
                      >
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
              <pagination :data="visits" @pagination-change-page="getResults"></pagination>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>

      <!-- Modal -->
      <div
        class="modal fade"
        id="addNew"
        tabindex="-1"
        role="dialog"
        aria-labelledby="addNew"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-blue">
              <h5 class="modal-title" v-show="!editmode">Visit Entry</h5>
              <h5 class="modal-title" v-show="editmode">Update Visitor Detail</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form
              @submit.prevent="editmode ? updateVisit() : createVisit()"
            >
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Client ID</label>
                  <input
                    v-model="form.client_id"
                    type="text"
                    disabled
                    name="description"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('description') }"
                  />
                  <has-error :form="form" field="description"></has-error>
                 </div>

                <!-- <div class="form-group">
                  <label>Client Name</label>
                  <select class="form-control" v-model="form.client_id" >
                    <option value="">Please Select</option>
                    <option
                      v-for="client in clients"
                      :key="client.id"
                      :value="client.id"
                      :selected="client.id == form.client_id"
                    >
                      {{ client.first_name }}
                    </option>
                  </select>
                  <has-error :form="form" field="category_id"></has-error>
                </div> -->
                
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" id="status" v-model="form.status">
                    <option value="">please select</option>
                    <option  value="Arrived, waiting to be seen (A)">Arrived, waiting to be seen (A)</option>
                    <option value="Being seen (B)">Being seen (B)</option>
                    <option value="Completed (C)">Completed (C)</option>
                    <option value="Referred (R)">Referred (R)</option>
                    <option value="Walked away (W)">Walked away (W)</option>
                    <option value="Did not attend appointment (DNA)">Did not attend appointment (DNA)</option>
                  </select>
                
                  <has-error :form="form" field="description"></has-error>
                </div>
                <div class="form-group">
                  <label>Remarks</label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="4" v-model="form.remarks" ></textarea>
                  <has-error :form="form" field="price"></has-error>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-danger float-left"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button v-show="editmode" type="submit" class="btn btn-success float-right">
                  Update
                </button>
                <button
                  v-show="!editmode"
                  type="submit"
                  class="btn btn-primary float-right"
                >
                  Create
                </button>
              </div>
            </form>
          </div>
        </div>        
      </div>
    <!-- end of modal 1 -->
    <!-- Clinal Modal -->
      <div class="modal fade" id="clinicalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content container">
            <div class="modal-header bg-blue">
              <h5 class="modal-title " id="exampleModalLabel">Open in Clinal Module</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"> 
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-3">
                    <router-link :to="{name: 'generalOPD', params: {visitId:visitorId,clientId:clientId}}">
                      <button class="btn btn-success p-2" data-dismiss="modal">
                        General OPD
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Lab Test Request
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Pregnancy Test & Advice
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Anter Natal Care
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Post Natal Care
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        IWC
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Vaccination
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        FP Services New
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        FP Services Revisit
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Condom Supply
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Sexual Health Screening Male
                      </button>
                    </router-link>
                  </div> 
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Sexual Health Screening Female
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Symptoms Male
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Symptoms Female
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Ultrasound Scanning – ANC
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Ultrasound Scanning – Gynae
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Infertility Management
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Cervical Screening
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                       Results Communication
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                        Return for Treatment
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                       Prescription
                      </button>
                    </router-link>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <router-link to="">
                      <button class="btn btn-success p-2">
                       STI Contact Tracing Form
                      </button>
                    </router-link>
                  </div>
                  
                 </div>
              </div>
              ...
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
        </div>
      </div>
      <!-- end of clinial modal -->
    </div>
  </section>
</template>

<script>
import VueTagsInput from "@johmun/vue-tags-input";
import moment from 'moment';

export default {
  components: {
    VueTagsInput,
  },
  data() {
    return {
      dialog: false,
      editmode: false,
      visits: {},
      clients:{},
      visitorId: '',
      clientId: '',
      loading: false,
      form: new Form({
        client_id: "",
        reason_for_visiting: "",
        status: "",
        remarks: ""
      }),
    };
  },
  methods: {
    getResults(page = 1) {

        this.$Progress.start();

        axios.get('api/visits?page=' + page).then(({ data }) => (this.visits = data.data));

        this.$Progress.finish();
    },
    loadVisits() {
      // if(this.$gate.isAdmin()){
      this.loading = true;
      axios.get("api/visits").then(({ data }) => {
        if (data.success) {
          this.loading = false;
          this.visits = data.data;
        }
      });

      // }
    },

    loadClients() {
      this.loading = true;
      axios.get('api/clients').then(({ data }) => {
        if(data.success){
          this.loading = false;
          this.clients = data.data
        }
      })
    },

    editModal(visit){
        this.editmode = true;
        this.form.reset();
        $('#addNew').modal('show');
        this.form.fill(visit);
    },
    newModal(){
        this.editmode = false;
        this.form.reset();
        $('#addNew').modal('show');
    },
    createProduct(){
        this.$Progress.start();

        this.form.post('api/product')
        .then((data)=>{
          if(data.data.success){
            $('#addNew').modal('hide');

            Toast.fire({
                  icon: 'success',
                  title: data.data.message
              });
            this.$Progress.finish();
            this.loadClients();

          } else {
            Toast.fire({
                icon: 'error',
                title: 'Some error occured! Please try again'
            });

            this.$Progress.failed();
          }
        })
        .catch(()=>{

            Toast.fire({
                icon: 'error',
                title: 'Some error occured! Please try again'
            });
        })
    },
    updateVisit(){
        this.$Progress.start();
        this.form.put('api/visits/'+this.form.client_id)
        .then((response) => {
            // success
            $('#addNew').modal('hide');
            Toast.fire({
              icon: 'success',
              title: response.data.message
            });
            this.$Progress.finish();
                //  Fire.$emit('AfterCreate');

            this.loadClients();
            this.loadVisits();
        })
        .catch(() => {
            this.$Progress.fail();
        });

    },
    deleteClient(id) {
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
            .delete("api/clients/" + id)
            .then(() => {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              // Fire.$emit('AfterCreate');
              this.loadClients();
            })
            .catch((data) => {
              Swal.fire("Failed!", data.message, "warning");
            });
        }
      });
    },

    setVisitorId(visitId,clientId) {
      this.visitorId = visitId;
      this.clientId = clientId;
    }
  },
  mounted() {},
  created() {
    this.$Progress.start();
    this.loadVisits();
    this.loadClients();
    this.$Progress.finish();
  },
  filters: {
    formatDate(date){
      return moment(date).calendar();
    }
  },
  computed: {
    
  },
};
</script>

<style scoped>
#arrived{
  background-color: black;
  color: white
}
#seen{
  background-color: blue;
  color: white
}
#completed{
  background-color: grey;
  color: white
}
#referred{
  background-color: purple;
}
#walked{
  background-color: brown;
  color: white
}
#DNA{
  background-color: red;
  color: white
}

/* .badge.badge-secondary-second{
  background-color: grey;
} */
</style>