<template>
  <div>

    <!-- sexual screenign for males -->
    <div >
      <div class="text-center mt-2">
        <h1 class="text-blue">Sexual Screening Module</h1>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <label for="male">Male</label>
          <input type="radio" name="sh_option" id="male" value="male" v-model="sh_screening_template_option">
        </div>
        <div class="col-lg-4">
          <label for="female">Female</label>
          <input type="radio" name="sh_option" value="female" v-model="sh_screening_template_option" id="">
        </div>
      </div>
    </div>
    <div v-if="sh_screening_template_option == 'male'">
      <div class="row">
        <div class="col-lg-3">
          <label for="">Age at first marriage</label>
          <input type="number" class="form-control" v-model="age_at_first_marriage">
        </div>
        <div class="col-lg-3">
          <label for="">Age at first SI</label>
          <input type="number" class="form-control" v-model="age_at_first_SI">
        </div>
        <div class="col-lg-3">
          <label for="">Last SI</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-lg-3">
          <label for="partner" class="">Partner</label>
          <div>
            <label for="">male</label>
            <input type="radio" name="partner" value="male">
            <label for="">female</label>
            <input type="radio" name="partner">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="oral">Oral</label>
          <input type="checkbox">
          <label for="oral">Vaginal</label>
          <input type="checkbox">
          <label for="">Protected</label>
          <input type="checkbox" name="" id="">
          <label for="">UnProtected</label>
          <input type="checkbox" name="" id="">
        </div>
        <div class="col-lg-3">
          <label for="">if rectal SI with partner</label>
          <label for="">Insertive</label>
          <input type="checkbox">
          <label for="">receptive</label>
          <input type="checkbox" name="" id="">
        </div>
        <div class="col-lg-3">
          <label for="">if Oral SI </label>
          <label for="">received</label>
          <input type="checkbox">
          <label for="">gave</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Hx Of Sexual health Screening</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">When was the last screen done</label>
          <input type="text" class="form-control">
          <label for="">No</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <span>Hx of STIs</span>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">Type of STI</label>
          <input type="text" name="" id="" class="form-control">
          <label for="">No</label>
          <input type="checkbox" name="" id="">
        </div>
        <div class="col-lg-3">
          <span for="">Treatment Received</span>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">No</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <span>Partners at the time</span>
          <label for="">treated</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">No</label>
          <input type="checkbox">
          <label for="">Tested</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">No</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label>Number of sexual partners in the last 3-6 months</label>
          <input type="number" name="" id="">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Current/Past Medical History</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-lg-3">
          <label for="">Family Medical History</label>
          <input type="text" class="form-control" name="" id="">
        </div>
        <div class="col-lg-3">
          <label for="">Current Medications/Treatment</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">Details</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <label for="">Yes</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Allergies</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">Details</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <label for="">No</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <span>Reason For Screening/Testing</span>
          <label for="">Routing Testing</label>
          <input type="checkbox">
          <label for="">Symptoms</label>
          <input type="checkbox">
          <span>go to symptoms page and complete</span>
          <label for="">Partner has symptoms</label>
          <input type="checkbox">
          <label for="">Details</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-lg-3">
          <label for="">Referal</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Referred By: </label>
          <input type="text" class="form-control">
        </div>
        <div class="col-lg-3">
          <label for="">Explain an discuss all available routine STI tests and their window periodd</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Explain and Discuss all treatment Options</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Explain and discuss partner/contact tracing, testing & treatment procedures if positive</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <span for="">Confirm client consent for test</span>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">NO</label>
          <input type="checkbox">
          <label for="">Reason</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-lg-3">
          <label for="">Samples taken for consented tests</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Select test(s) consented to</label>
          <span>Sample types</span>
          <label for="">Urine</label>
          <input type="checkbox">
          <label for="">Blood</label>
          <input type="checkbox">
          <label for="">Swab</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Location</label>
          <select name="" id="" class="form-control">
            <option value="">Please select</option>
            <option value="">vagina</option>
            <option value="">cervix</option>
            <option value="">throat</option>
            <option value="">rectum</option>
          </select>
          <label for="">Other(s) please specify</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-lg-3">
          <label for="">Discuss/explain results duration & next steps after result</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Discuss/explain referal options & procedure</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Condoms Supplied</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">Amount Given</label>
          <input type="text" class="form-control">
          <label for="">No</label>
          <input type="checkbox">
          <label for="">Reason</label>
          <input type="text" class="text-field">
        </div>
        <div class="col-lg-3">
          <label for="">Notes</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <span>Please go to lab and complete details</span>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3"></div>
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3"></div>
      </div>
    </div>

    <!-- sexual screening for female -->
    <div v-if="sh_screening_template_option == 'female'">
      <div class="row">
        <div class="col-lg-3">
          <label for="">Age at first Period</label>
          <input type="number" class="form-control">
        </div>
        <div class="col-lg-3">
          <label for="">Age at first marriage</label>
          <input type="number" class="form-control">
        </div>
        <div class="col-lg-3">
          <label for="">Age at first SI</label>
          <input type="number" class="form-control">
        </div>
        <div class="col-lg-3">
          <label for="">Last SI</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="partner" class="">Partner</label>
          <div>
            <label for="">male</label>
            <input type="radio" name="partner" value="male">
            <label for="">female</label>
            <input type="radio" name="partner">
          </div>
        </div>
        <div class="col-lg-3">
          <label for="oral">Oral</label>
          <input type="checkbox">
          <label for="oral">Vaginal</label>
          <input type="checkbox">
          <label for="">Protected</label>
          <input type="checkbox" name="" id="">
          <label for="">UnProtected</label>
          <input type="checkbox" name="" id="">
        </div>
        <div class="col-lg-3">
          <label for="">if rectal SI with male partner</label>
          <label for="">Insertive</label>
          <input type="checkbox">
          <label for="">receptive</label>
          <input type="checkbox" name="" id="">
        </div>
        <div class="col-lg-3">
          <label for="">if Oral SI </label>
          <label for="">received</label>
          <input type="checkbox">
          <label for="">gave</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Hx Of Sexual health Screening</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">When was the last screen done</label>
          <input type="text" class="form-control">
          <label for="">No</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <span>Hx of STIs</span>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">Type of STI</label>
          <input type="text" name="" id="" class="form-control">
          <label for="">No</label>
          <input type="checkbox" name="" id="">
        </div>
        <div class="col-lg-3">
          <span for="">Treatment Received</span>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">No</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <span>Partners at the time</span>
          <label for="">treated</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">No</label>
          <input type="checkbox">
          <label for="">Tested</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">No</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label>Number of sexual partners in the last 3-6 months</label>
          <input type="number" name="" id="">
        </div>
        <div class="col-lg-3">
          <label for="">Current/Past Medical History</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-lg-3">
          <label for="">Family Medical History</label>
          <input type="text" class="form-control" name="" id="">
        </div>
        <div class="col-lg-3">
          <label for="">Current Medications/Treatment</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">Details</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <label for="">Yes</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Allergies</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">Details</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <label for="">No</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <span>Reason For Screening/Testing</span>
          <label for="">Routing Testing</label>
          <input type="checkbox">
          <label for="">Symptoms</label>
          <input type="checkbox">
          <span>go to symptoms page and complete</span>
          <label for="">Partner has symptoms</label>
          <input type="checkbox">
          <label for="">Details</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-lg-3">
          <label for="">Referal</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Referred By: </label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Explain an discuss all available routine STI tests and their window periodd</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Explain and Discuss all treatment Options</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Explain and discuss partner/contact tracing, testing & treatment procedures if positive</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <span for="">Confirm client consent for test</span>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">NO</label>
          <input type="checkbox">
          <label for="">Reason</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Samples taken for consented tests</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Select test(s) consented to</label>
          <span>Sample types</span>
          <label for="">Urine</label>
          <input type="checkbox">
          <label for="">Blood</label>
          <input type="checkbox">
          <label for="">Swab</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Location</label>
          <select name="" id="" class="form-control">
            <option value="">Please select</option>
            <option value="">vagina</option>
            <option value="">cervix</option>
            <option value="">throat</option>
            <option value="">rectum</option>
          </select>
          <label for="">Other(s) please specify</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-lg-3">
          <label for="">Discuss/explain results duration & next steps after result</label>
          <input type="checkbox">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <label for="">Discuss/explain referal options & procedure</label>
          <input type="checkbox">
        </div>
        <div class="col-lg-3">
          <label for="">Condoms Supplied</label>
          <label for="">Yes</label>
          <input type="checkbox">
          <label for="">Amount Given</label>
          <input type="text" class="form-control">
          <label for="">No</label>
          <input type="checkbox">
          <label for="">Reason</label>
          <input type="text" class="text-field">
        </div>
        <div class="col-lg-3">
          <label for="">Notes</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <span>Please go to lab and complete details</span>
        </div>
        <div class="col-lg-3"></div>
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3"></div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  data(){
    return {
      sh_screening_template_option: '',
      age_at_first_marriage: '',
      age_at_first_SI: '',
      last_SI: '',
    }
  },
  methods: {
    addData(){
      console.log('hellow');
    }
  }
}
</script>

<style>
</style>