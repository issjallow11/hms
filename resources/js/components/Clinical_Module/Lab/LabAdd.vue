<template>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header bg-blue">
        <h1 class="text-center">Lab Module</h1>
      </div>
      <form @submit.prevent="addLab">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3">
              <label for="reason for test" class="text-center">Reason for test</label>
              <div>
                <label for="routine" class="text-blue">Routine</label>
                <input type="radio" name="reason_for_test" value="routine"  @click="other_reason = false">
                <label for="referral" class="text-blue">Referral</label>
                <input type="radio" name="reason_for_test" value="referral"  @click="other_reason = false">
                <label for="other" class="text-blue">other</label>
                <input type="radio" name="reason_for_test" value="other" class="text-blue" @click="other_reason = true">
                <div v-if="other_reason">
                  <label for="specify" class="text-blue">Please specify</label>
                  <textarea class="form-control" cols="30" rows="3"></textarea>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <label for="current or past medical history">Current/Past Medical History</label>
              <textarea name="medical history" id="" cols="30" rows="3" class="form-control"></textarea>
            </div>
            <div class="col-lg-3">
              <label for="family medical history"> Family Medical History</label>
              <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
              <!-- <input type="text" class="form-control"> -->
            </div>
            <div class="col-lg-3">
              <label for="Current-medications"> Current medications</label>
              <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
              <!-- <input type="text" class="form-control"> -->
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3">
              <label for="allergies">Allergies</label>
              <input type="text" v-model="form.allergies" class="form-control">
            </div>
            <div class="col-lg-3">
              <label for="explain/discuss all requested test">Explain/discuss all requested tests</label>
              <input type="text" v-model="form.requested_tests" class="form-control">
            </div>
            <div class="col-lg-3">
              <label for="explain/discuss results">Explain/discuss results</label>
              <div>
                <input type="checkbox" v-model="form.results">
              </div>
            </div>
            <div class="col-lg-3">
              <label for="explain/discuss all treatment/care options">explain/discuss all treatment/care
                options</label>
              <div>
                <input type="checkbox" v-model="form.treatment_care">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3">
              <label for="explain/discuss partner/contact tracing, testing & procedure where necessary">explain/discuss
                partner/contact tracing, testing & procedure where necessary</label>
              <input type="checkbox" v-model="form.contact_tracing">
            </div>
            <div class="col-lg-3">
              <label for="client consent">Confirm Client Consent for Test</label>
              <div>
                <input type="radio" name="client-consent" value="yes" v-model="form.client_consent">
                <label for="Yes" class="text-blue">Yes</label>
                <input type="radio" name="client-consent" id="" value="no" v-model="form.client_consent"
                  class="pt-1 mt-1">
                <label for="no" class="text-blue">No</label>
              </div>
            </div>
            <div class="col-lg-3">
              <label for="">Samples Taken for Consented Test</label>
              <div>
                <input type="checkbox" v-model="form.samples_taken_for_consent">
              </div>
            </div>
            <div class="col-lg-3">
              <label for="">Select Test Consented To</label>
              <select name="" id="" class="form-control" v-model="form.test_consented">
                <option value="">Please select</option>
                <option value="urine">Test1</option>
                <option value="blood">Test2</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3">
              <label for="sample type" class="text-center">Sample Type</label>
              <div>
                <label for="urine" class="text-blue">Urine</label>
                <input type="checkbox" v-model="form.sample_type" value="urine">
                <label for="blood" class="text-blue">Blood</label>
                <input type="checkbox" v-model="form.sample_type" value="blood" @click="other_sample_type = false">
                <label for="swab" class="text-blue">Swab</label>
                <input type="checkbox" v-model="form.sample_type" value="swab" @click="other_sample_type = false">
                <label for="other" class="text-blue">Other</label>
                <input type="checkbox" @click="other_sample_type = true">
                <div v-if="other_sample_type">
                  <label for="">Please Specify</label>
                  <input type="text" v-model="form.sample_type" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <label for="">Ask client if they have any questions</label>
              <input type="checkbox" v-model="form.client_questions">
            </div>
            <div class="col-lg-3">
              <label for="">Date test requested</label>
              <input type="datetime-local" v-model="form.date_test_requested" class="form-control">
            </div>
            <div class="col-lg-3">
              <label for="">Date sample taken</label>
              <input type="datetime-local" v-model="form.date_sample_taken" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <label for="">Date sample received</label>
              <input type="datetime-local" v-model="form.date_sample_received" class="form-control">
            </div>
            <div class="col-lg-4">
              <label for="">Select test</label>
              <select name="" id="" class="form-control" v-model="form.select_test">
                <option value="">Please select</option>
                <option value="option1">Option1</option>
                <option value="option2">Option2</option>
              </select>
            </div>
            <div class="col-lg-4">
              <label for="">Select result</label>
              <select name="" id="" class="form-control" v-model="form.select_result">
                <option value="">Please select</option>
                <option value="option1">Option1</option>
                <option value="option2">Option2</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="">Details for positive results</label>
              <textarea name="" id="" cols="15" rows="3" v-model="form.result_details" class="form-control"></textarea>
              <!-- <input type="text" v-model="form.result_details" class="form-control"> -->
            </div>
            <div class="col-lg-6">
              <label for="">Comments or remarks</label>
              <textarea name="" id="" cols="15" rows="3" v-model="form.remarks" class="form-control"></textarea>
              <!-- <input type="text" v-model="form.remarks" class="form-control"> -->
            </div>
            <div class="col-log-3"></div>
            <div class="col-log-3"></div>
            <div class="col-log-3"></div>
          </div>

          <div class="row">
            <div class="col-log-3"></div>
            <div class="col-log-3"></div>
            <div class="col-log-3"></div>
            <div class="col-log-3"></div>
          </div>

          <div class="row">
            <div class="col-log-3"></div>
            <div class="col-log-3"></div>
            <div class="col-log-3"></div>
            <div class="col-log-3"></div>
          </div>
        </div>


        <div class="card-footer">
          <button type="submit" class="btn btn-primary ">
            <i class="fa fa-paper-plane">submit</i>
          </button>
          <router-link to="/visitors" class="text-white float-right">
            <button class="btn btn-danger">
              Back
            </button>
          </router-link>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  props: ['visitId', 'clientId'],
  data() {
    return {
      other_reason: false,
      other_sample_type: false,
      form: new Form({
        visitorId: this.visitId,
        allergies: '',
        requested_tests: '',
        results: '',
        treatment_care: '',
        contact_tracing: '',
        client_consent: '',
        samples_taken_for_consent: '',
        test_consented: '',
        sample_type: '',
        client_questions: '',
        date_test_requested: '',
        date_sample_taken: '',
        date_sample_received: '',
        select_test: '',
        select_result: '',
        result_details: '',
        remarks: '',
      })
    }
  },
  methods: {
    addLab() {
      this.form.post('/api/lab')
        .then((data) => {
          console.log('data')
        })
        .catch((err) => {

        })
    }
  },
  created() { }
}
</script>

<style scoped>
  input[type=checkbox] {
    width: 40px;
    height: 30px;
  }

  input[type=radio] {
    width: 20px;
    height: 20px;
  }
</style>