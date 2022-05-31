<template>
  <div class="container-fluid">
    <!-- <div class="text-center ">
      <h2>Clinical Module Template</h2>
    </div> -->
    <div class="card mt-3">
      <div class="card-header bg-blue">
        <div class="container">
          <h4 class="text-center">
            General OPD
          </h4>
        </div>
      </div>
      <form @submit.prevent="submitRecord">
        <!-- card body -->
        <div class="card-body">
          <div class="container-fluid">

            <div class="row">
              <div class="col-lg-3">
                <label for="">Client ID</label>
                <input type="text" disabled :value="client.id" class="form-control">
              </div>
              <div class="col-lg-3">
                <label for="">complaint</label>
                <input type="text" disabled name="" id="" :value="client.visitor[0].reason_for_visiting"
                  class="form-control">
              </div>
              <div class="col-lg-3">
                <label for="exampleFormControlTextarea1">Medical History</label>
                <textarea class="form-control" disabled :value="client.medical_history[0].medical_history"
                  id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="col-lg-3">
                <label for="">Current Mediaction</label>
                <input type="text" name="" disabled :value="client.medical_history[0].medical_history_details" id=""
                  class="form-control">
              </div>
            </div>
            <div v-if="general_opd">
              <div class="row">
                <div class="col-lg-3">
                  <label for="">Allergies</label>
                  <input type="text" v-model="form.allergies" name="" id="" class="form-control">
                </div>


                <div class="col-lg-3">
                  <label for="">BP</label>
                  <input type="number" name="" id="" class="form-control" v-model="form.bp">
                </div>
                <div class="col-lg-3">
                  <label for="">Pulse</label>
                  <input type="number" name="" id="" class="form-control" v-model="form.pulse">
                </div>
                <div class="col-lg-3">
                  <label for="">Temperature</label>
                  <input type="number" name="" id="" class="form-control" v-model="form.temperature">
                </div>
                <div class="col-lg-3">
                  <label for="">Weight</label>
                  <input type="number" name="" id="" class="form-control" v-model="form.weight">
                </div>
                <div class="col-lg-3">
                  <label for="">BMI Calculator</label>
                  <input type="number" name="" id="" class="form-control" v-model="form.bmi_calculator">
                </div>
                <div class="col-lg-3">
                  <label for="">BM mmol/dl</label>
                  <input type="number" name="" id="" class="form-control" v-model="form.bm_mmol">
                  <label for="">BM mmol/dl details</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.bm_mmol_details"></textarea>
                </div>
                <div class="col-lg-3">
                  <label for="">HB g/dl</label>
                  <input type="number" name="" id="" class="form-control" v-model="form.hb_g">
                  <label for="">HB g/dl details</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.hb_g_details"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <label for="">HCG:Negative</label>
                  <input type="radio" name="hcg" id="" value="negative" v-model="form.hcg">
                </div>
                <div class="col-lg-3">
                  <label for="">HCG:Positve</label>
                  <input type="radio" name="hcg" id="" value="positive" v-model="form.hcg">
                </div>
                <div class="col-lg-3">
                  <label for="">HCG:Details</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.hcg_details"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <label for="">RDT:Negative</label>
                  <input type="radio" name="rdt" id="" value="negative" v-model="form.rdt">
                </div>
                <div class="col-lg-3">
                  <label for="">RDT:Positve</label>
                  <input type="radio" name="rdt" id="" value="positve" v-model="form.rdt">
                </div>
                <div class="col-lg-3">
                  <label for="">RDT:Details</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.rdt_details"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <label for="">Urinalysis:Negative</label>
                  <input type="radio" name="urinalysis" id="" value="negative" v-model="form.urinalysis">
                </div>
                <div class="col-lg-3">
                  <label for="">Urinalysis:Positve</label>
                  <input type="radio" name="urinalysis" id="" value="positive" v-model="form.urinalysis">
                </div>
                <div class="col-lg-3">
                  <label for="">Urinalysis:Details</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.urinalysis_details"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <label for="">Diagnosis</label>
                  <input type="text" class="form-control" v-model="form.diagnosis">
                </div>
                <div class="col-lg-3">
                  <label for="">Treatment Given</label>
                  <div>
                    <label for="Yes">Yes</label>
                    <input type="radio" name="treatmentGiven" value="yes" v-model="form.treatment_given" @click="treatmentGiven = !treatmentGiven">
                    <span v-if="treatmentGiven" class="text-blue">Complete in Prescription Template</span>
                    <label class="" for="">No</label>
                    <input type="radio" name="treatmentGiven" value="no" v-model="form.treatment_given" @click="treatmentGiven = false">
                  </div>
                </div>
                <div class="col-lg-3">
                  <label for="">Offer Routine Sexual health Screen</label>
                  <div>
                    <label for="">Yes</label>
                    <input type="radio" name="OFRSH" value="yes" v-model="form.sexual_health_screening"
                      @click="ORSH_Yes = true, ORSH_No = false, sh_screening_template = true">
                    <span v-if="ORSH_Yes" class="text-blue">Complete in SH screening template</span>
                  </div>
                  <div>
                    <label for="">No</label>
                    <input type="radio" name="OFRSH" value="no" v-model="form.sexual_health_screening"
                      @click="ORSH_No = true, ORSH_Yes = false, sh_screening_template = false, sh_screening_template_option = ''">
                    <label v-if="ORSH_No" for="" class="text-center">Reason</label>
                    <input v-if="ORSH_No" type="text" class="form-control" v-model="form.sexual_health_screening_reason">
                  </div>
                </div>
                <div class="col-lg-3">
                  <label for="advice">Advice/Counselling Provided</label>
                  <label for="yes">Yes</label>
                  <input type="radio" name="g_o_p_d_advice" value="yes" v-model="form.counselling_provided">
                  <label for="no">NO</label>
                  <input type="radio" name="g_o_p_d_advice" value="no" v-model="form.counselling_provided">
                </div>
                <div class="col-lg-3">
                  <label for="">Refer For Further Treatment</label>
                  <div>
                    <label for="">Yes</label>
                    <input type="radio" name="referal" value="yes" v-model="form.referred" @click="referal = !referal">
                    <span v-if="referal" class="text-blue">Complete in Referal template</span>
                    <label for="" class="pl-2 ml-2">No</label>
                    <input type="radio" name="referal" value="no" v-model="form.referred" @click="referal = false">
                  </div>
                </div>
                <div class="col-lg-3">
                  <label for="">Do You Have Any Questions</label>
                  <input type="checkbox" value="yes" v-model="form.quesions">
                </div>
                <div class="lg-3">
                  <label for="">Information leaflets given</label>
                  <div>
                    <label for="">Yes</label>
                    <input type="radio" name="information_leaflets" id="">
                    <label for="">No</label>
                    <input type="radio" name="information_leaflets" id="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <label for="">Advice & info given</label>
                  <input type="text" class="form-control" v-model="form.advice_given" @click="advice = !advice">
                  <span v-if="advice" class="text-blue">Complete in lab request template</span>
                </div>
              </div>
            </div>

            <!-- Prescription template -->

            <!-- sexual screening template -->
            <div v-if="sh_screening_template">
              <!-- <SexualScreening /> -->
              <div>
                <div class="card-header bg-blue mt-4">
                  <div class="container-fluid">
                    <h2 class="text-white text-center">Sexual Screening Module</h2>
                  </div>
                </div>
                <div class="row mt-4 text-center">
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
                    <label for="">Explain and discuss partner/contact tracing, testing & treatment procedures if
                      positive</label>
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
                    <label for="">Explain and discuss partner/contact tracing, testing & treatment procedures if
                      positive</label>
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


            <!-- Sexual Health Screening Male  -->

            <!-- sexual health screening for females -->


            <!-- Referal Template -->
          <div v-if="referal">
            <div class="text-center mt-2">
              <h1 class="text-blue">Referal Template</h1>
            </div>
            <div>
              <div class="row">
                <div class="col-lg-3">
                  <label for="">Referred To</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="col-lg-3">
                  <label>Reason for Referal:</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="col-lg-3">
                  <label for="">Date of Review</label>
                  <input type="text" class="form-control">
                </div>
                <div class="col-lg-3">
                  <label for="">Questions</label>
                  <input type="checkbox" name="" id="">
                </div>
              </div>
  
              <div class="row">
                <div class="col-lg-3">
                  <label for="">Referal form completed signed and given to client</label>
                  <input type="checkbox">
                </div>
                <div class="col-lg-3">
                  <label for="">Document any relevant details</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>

            <!-- <div v-if="sh_screening_template">
              <button @click="general_opd = true">
                <i>Back to General OPD</i>
              </button>
            </div>
             -->
          </div>
        </div>
        <!-- card footer -->
        <div class="card-footer">
          <div class="container">
            <button type="submit" class="btn btn-primary ">
              <i class="fa fa-paper-plane">submit</i>
            </button>
            <router-link to="/visitors" class="text-white float-right">
              <button class="btn btn-danger">
                Back
              </button>
            </router-link>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import SexualScreening from "../input_components/SexualScreening.vue"
export default {
  props: ['visitId','clientId'],
  components: {
    SexualScreening
  },
  data() {
    return {
      client: '',
      treatmentGiven: false,
      ORSH_Yes: false,
      ORSH_No: false,
      referal: false,
      advice: false,
      general_opd: true,
      prescription_template: false,
      sh_screening_template: false,
      sh_screening_template_option: '',

      form: new Form({
        visitor_id: this.visitId,
        allergies: '',
        bp: '',
        pulse: '',
        temperature: '',
        weight: '',
        bmi_calculator: '',
        bm_mmol: '',
        bm_mmol_details: '',
        hb_g: '',
        hb_g_details: '',
        hcg: '',
        hcg_details: '',
        rdt: '',
        rdt_details: '',
        urinalysis: '',
        urinalysis_details: '',
        diagnosis: '',
        treatment_given: '',
        sexual_health_screening: '',
        sexual_health_screening_reason: '',
        counselling_provided: '',
        referred: '',
        question_asked_by_client: '',
        // question_answered: '',
        information_leaflets: '',
        info_given: '',
        referred_to: '',
        reason_for_referal: '',
        date_of_review: '',
        questions: '',
        referal_form: '',
        relevant_details: '',
      })
    }
  },
  methods: {
    getClient() {
      console.log('visit id is'+this.visitId);
      axios.get(`/api/clients/${this.clientId}`)
        // axios.get('api/clients')
        .then(({ data }) => {
          this.client = data.data;
        }).catch(({ err }) => {
          console.log(err);
        })
    },
    submitRecord(){
      this.$Progress.start();
      this.form
        .post("/api/generalOpd")
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
    }
  },
  created() {
    this.$Progress.start();
    this.getClient();
    $this.$Progress.finish();
  }
}
</script>