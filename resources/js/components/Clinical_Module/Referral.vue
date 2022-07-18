<template>
  <div class="container-fluid">
    <form @submit.prevent="submitReferral">
      <div class="card">
        <div class="card-header bg-blue">
          <h1 class="text-center">Referall Template</h1>
        </div>
        <div class="card-body">
          <div>
            <!-- <div class="text-center mt-2">
              <h1 class="text-blue">Referal Template</h1>
            </div> -->
            <div>
              <div class="row">
                <div class="col-lg-4">
                  <label for="">Referred To</label>
                  <input type="text" class="form-control" v-model="form.referred_to"/>
                </div>
                <div class="col-lg-4">
                  <label>Reason for Referal:</label>
                  <input type="text" class="form-control" v-model="form.reason_for_referral"/>
                </div>
                <div class="col-lg-4">
                  <label for="">Date of Review</label>
                  <input type="datetime-local" class="form-control" v-model="form.date">
                </div>
              </div>
  
              <div class="row">
                <div class="col-lg-4">
                  <label for="">Questions</label>
                  <div>
                    <input type="checkbox" name="" id="" v-model="form.questions">
                  </div>
                </div>
                <div class="col-lg-4">
                  <label for="">Referal form completed signed and given to client</label>
                  <div>
                    <input type="checkbox" v-model="form.referral_form_signed">
                  </div>
                </div>
                <div class="col-lg-4">
                  <label for="">Document any relevant details</label>
                  <input type="text" class="form-control" v-model="form.relevant_details">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="">
            <button type="submit" class="btn btn-primary ">
            </button>
            <router-link to="/visitors" class="text-white float-right">
              <button class="btn btn-danger">
                Back
              </button>
            </router-link>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  props: ['visitId','clientId'],
  data(){
    return {
      form: new Form({
        visitorId: this.visitId,
        referred_to: '',
        reason_for_referral: '',
        date: '',
        questions: false,
        referral_form_signed: false,
        relevant_details: '',
      })
    }
  },
  created(){

  },
  methods:{
    submitReferral(){
      this.form.post('/api/referral')
        .then(( data ) => {
          // console.log()
          if(data.data.success){
            Toast.fire({
              icon: "success",
              title: data.data.message,
            });
            this.$Progress.finish();
            this.$router.push("/visitors")
          }else{
            Toast.fire({
              icon: "error",
              title: "some error occured! Please try again"
            });
            this.$Progress.failed();
          }
        })
        .catch(() => {
          // console.log(err);
          Toast.fire({
            icon: "error",
            title: "some error ocurred! Please try again"
          })
        })
    }
  }
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