<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-blue">
            <h3 class="card-title">Add Visit</h3>
          </div>
          <form @submit.prevent="addVisit">
            <div class="card-body">
              <div class="container">
                <div class="form-row">
                  <div v-if="selectedName !== undefined" class="col-sm-4">
                    <label for="">Client Name</label>
                    <h3>{{ selectedName }}</h3>
                  </div>
                  <div class="col-sm-4">
                    <label for="">Client ID</label>
                    <v-select :options="clients" label="clinic_no" v-model="selected" @input="setSelected">
                    </v-select>
                  </div>
                  <div class="col-lg-4">
                    <label for="">To Be Seen By</label>
                    <select name="" id="" class="form-control" v-model="form.user_id">
                      <option value="">Please select</option>
                      <option value="">malick</option>
                      <!-- <option :value="doctor.id" v-for="doctor in doctors" :key="doctor.id">{{ doctor.name }}</option> -->
                    </select>
                  </div>
                </div>
                <div class="mt-2 text-center text-blue">
                  <h3 for="">Reason For Visiting</h3>
                </div>
                <div class="form-row">
                  <div class="col-lg-2">
                    <label for="">Enquiry on services offered</label>
                    <input type="checkbox" name="enquiry on services offered" id="" value="Enquiry on services offered"
                      v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">General OPD</label>
                    <input type="checkbox" name="General OPD" value="General OPD" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Pregnancy Test</label>
                    <input type="checkbox" name="Pregnancy Test" value="Pregnancy Test"
                      v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Wound dressing</label>
                    <input type="checkbox" value="Wound dressing" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Circumcision</label>
                    <input type="checkbox" value="Circumcision" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">ANC</label>
                    <input type="checkbox" value="ANC" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">IWC</label>
                    <input type="checkbox" value="IWC" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">PNC</label>
                    <input type="checkbox" value="PNC" v-model="form.reason_for_visiting" />
                  </div>

                  <div class="col-lg-2">
                    <label for="">Immunization</label>
                    <input type="checkbox" value="Immunization" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">FP Services</label>
                    <input type="checkbox" value="FP Services" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Sexual health</label>
                    <input type="checkbox" value="Sexual health" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Lab Test</label>
                    <input type="checkbox" value="Lab Test" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Test Result</label>
                    <input type="checkbox" value="Test Result" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Medications Only</label>
                    <input type="checkbox" value="Medications Only" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Symptoms</label>
                    <input type="checkbox" value="Sypmtoms" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Return for treatment</label>
                    <input type="checkbox" value="Return for treatment" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Scanning</label>
                    <input type="checkbox" value="Scanning" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Cervical Screening</label>
                    <input type="checkbox" value="cervical screening" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Infertility</label>
                    <input type="checkbox" value="infertility" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">follow-up/Review</label>
                    <input type="checkbox" value="follow-up/Review" v-model="form.reason_for_visiting" />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Other</label>
                    <input type="checkbox" @click="otherReason = !otherReason" />
                    <div v-if="otherReason">
                      <textarea class="form-control" id="exampleFormControlTextarea3" rows="4"
                        v-model="form.reason_for_visiting"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary ">
                <i class="fa fa-paper-plane text-white">submit</i>
              </button>
              <router-link to="/visitors" class="float-right">
                <button class="btn btn-danger">
                  <i class="fas fa-arrow-left">Back</i>
                </button>
              </router-link>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vSelect from 'vue-select';
export default {
  components: {
    vSelect
  },
  data() {
    return {
      selected: '',
      clients: [],
      doctors: {},
      otherReason: false,
      form: new Form({
        selectedName: '',
        clinic_no: '',
        user_id: '',
        reason_for_visiting: [],
        status: "Arrived, waiting to be seen (A)"
      })
    };
  },
  methods: {
    setSelected() {
      this.form.clinic_no = this.selected.clinic_no;
      this.form.selectedID = this.selected.clinic_no;
      console.log(this.selected.clinic_no);
    },
    loadClients() {
      axios
        .get("/api/clients")
        .then(({ data }) => {
          this.clients = data.data;
        })
        .catch(({ error }) => {
          console.log(error);
        });
    },
    loadDoctors() {
      axios
        .get("/api/doctors")
        .then(({ data }) => {
          this.doctors = data.data;
        })
        .catch(({ error }) => {
          console.log(error);
        });
    },
    addVisit() {
      this.form.post("/api/visits")
        .then((data) => {
          if (data.data.success) {
            Toast.fire({
              icon: "success",
              title: data.data.message,
            });
            this.$Progress.finish();
            this.$router.push("/visitors");
          } else {
            Toast.fire({
              icon: "error",
              title: "Some error occured! Please try again",
            });
            this.$Progress.failed();
          }
        })
        .catch(() => {
          Toast.fire({
            icon: "error",
            title: "Some error occured! Please try again",
          });
        });
    },
  },

  created() {
    this.$Progress.start();
    this.loadClients();
    this.loadDoctors();
    this.$Progress.finish();
  },

  computed: {
    selectedName() {
      this.form.clinic_no = this.selected.clinic_no;
      return this.form.selectedName = this.selected.first_name + ' ' + this.selected.last_name;

    }
  }
};
</script>