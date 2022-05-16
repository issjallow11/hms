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
                  <div class="col-sm-6">
                    <label for="">client id</label>
                    <input
                      type="text"
                      name="client_id"
                      disabled
                      id="client_id"
                      v-model="form.client_id"
                      class="form-control"
                    />
                  </div>
                  <div class="col-sm-6">
                    <label for="">Client Name</label>
                    <select
                      v-model="form.client_id"
                      class="form-control"
                      name="client_id"
                      id="client_id"
                    >
                      <option value="">please select</option>
                      <option
                        v-for="client in clients"
                        :key="client.id"
                        :value="client.id"
                        :selected="client.id == form.client_id"
                      >
                        {{ client.first_name }} {{ client.middle_name }}
                        {{ client.last_name }}
                      </option>
                    </select>
                  </div>
                  <Dropdown
                    :options="clients"
                    v-on:selected="validateSelection"
                    v-on:filter="getDropdownValues"
                    :disabled="false"
                    name="zipcode"
                    :maxItem="10"
                    placeholder="Please select an option">
                </Dropdown>
                </div>
                <div class="mt-2 text-center text-blue">
                  <h3 for="">Reason For Visiting</h3>
                </div>
                <div class="form-row">
                  <div class="col-lg-2">
                    <label for="">Enquiry on services offered</label>
                    <input
                      type="checkbox"
                      name="enquiry on services offered"
                      id=""
                      value="Enquiry on services offered"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">General OPD</label>
                    <input
                      type="checkbox"
                      name="General OPD"
                      value="General OPD"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Pregnancy Test</label>
                    <input
                      type="checkbox"
                      name="Pregnancy Test"
                      value="Pregnancy Test"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Wound dressing</label>
                    <input
                      type="checkbox"
                      value="Wound dressing"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Circumcision</label>
                    <input
                      type="checkbox"
                      value="Circumcision"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">ANC</label>
                    <input
                      type="checkbox"
                      value="ANC"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">IWC</label>
                    <input
                      type="checkbox"
                      value="IWC"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">PNC</label>
                    <input
                      type="checkbox"
                      value="PNC"
                      v-model="form.reason_for_visiting"
                    />
                  </div>

                  <div class="col-lg-2">
                    <label for="">Immunization</label>
                    <input
                      type="checkbox"
                      value="Immunization"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">FP Services</label>
                    <input
                      type="checkbox"
                      value="FP Services"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Sexual health</label>
                    <input
                      type="checkbox"
                      value="Sexual health"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Lab Test</label>
                    <input
                      type="checkbox"
                      value="Lab Test"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Test Result</label>
                    <input
                      type="checkbox"
                      value="Test Result"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Medications Only</label>
                    <input
                      type="checkbox"
                      value="Medications Only"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Symptoms</label>
                    <input
                      type="checkbox"
                      value="Sypmtoms"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Return for treatment</label>
                    <input
                      type="checkbox"
                      value="Return for treatment"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Scanning</label>
                    <input
                      type="checkbox"
                      value="Scanning"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Cervical Screening</label>
                    <input
                      type="checkbox"
                      value="cervical screening"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Infertility</label>
                    <input
                      type="checkbox"
                      value="infertility"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">follow-up/Review</label>
                    <input
                      type="checkbox"
                      value="follow-up/Review"
                      v-model="form.reason_for_visiting"
                    />
                  </div>
                  <div class="col-lg-2">
                    <label for="">Other</label>
                    <input
                      type="checkbox"
                      @click="otherReason = !otherReason"
                    />
                    <div v-if="otherReason">
                      <textarea
                        class="form-control"
                        id="exampleFormControlTextarea3"
                        rows="4"
                        v-model="form.reason_for_visiting"
                      ></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <router-link to="/visitors">
                <button class="btn btn-danger">
                  <i class="fas fa-arrow-left">Back</i>
                </button>
              </router-link>

              <button type="submit" class="btn btn-primary float-right">
                <i>Submit</i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Dropdown from 'vue-simple-search-dropdown';
export default {
  components: {
    Dropdown
  },
  data() {
    return {
      clients: [],
      otherReason: false,
      form: new Form({
        client_id: "",
        reason_for_visiting: [],
        status: "Arrived, waiting to be seen (A)"
      }),
    };
  },
  methods: {
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
    this.$Progress.finsih();
  },
};
</script>