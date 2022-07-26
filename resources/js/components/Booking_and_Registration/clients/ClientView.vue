<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Register Client</h3>
            </div>
          <!-- <h1>a{{id}</h1> -->
            <!-- /.card-header -->
            <form @submit.prevent="">
              <div class="form-row">
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputEmail3" class="col-sm-6 col-form-label"
                    >First Name</label
                  >
                  <div class="col-sm-10">
                    <input type="text" :value="clients.first_name" disabled class="form-control" id="inputEmail3" />
                  </div>
                </div>

                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" :value="clients.middle_name" class="col-sm-6 col-form-label"
                    >Middle Name</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="password" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>

                <div class="form-group col-md-4 py-2 px-2">
                  <label for="text" class="col-sm-6 col-form-label"
                    >Last Name</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.last_name" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Address</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.address" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div> 
                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Date of Birth</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.date_of_birth" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >age</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.age" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Gender</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.gender" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Marital Status</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.marital_status" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Nationality</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.nationality" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Sexual Orientation</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.sexual_orientation" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Medical History</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.medical_history" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Medications</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.medications" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Allergies</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.allergies" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Ethnicity</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.ethnicity" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Telephone 1</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.telephone_1" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Telephone 2</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.telephone_2" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Email</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.email" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Preffered Form Of Contact</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.preferred_form_of_contact" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Education</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.education" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div> 
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Education Level</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.education_level" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>
                                
                <div class="form-group col-md-4 py-2 px-2">
                  <label for="inputPassword3" class="col-sm-6 col-form-label"
                    >Occupation</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text" :value="clients.occupation" disabled class="form-control" id="inputPassword3" />
                  </div>
                </div>              
              </div>
              

              <div class="footer px-1 py-1">
                <router-link to="/clients">
                  <button type="button" class="btn btn-danger float-left mb-2">
                    <i class="fas fa-arrow-left">
                      Back
                    </i>
                  </button>
                </router-link>
              </div>
            </form>
            <!-- /.card-body -->
            <!-- <div class="card-footer">
              <pagination
                :data="products"
                @pagination-change-page="getResults"
              ></pagination>
            </div> -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  components: {
  },
  props: ['id'],
  data() {
    return {
      clients: {},
    };
  },
  methods: {
   getClient() {
    axios.get(`/api/clients/${this.id}`)
    .then(({data}) => {
      if(data.success){
        this.clients = data.data
    }
    }).catch((error) => {
      console.log(error)
    })
   },
  },
  mounted() {
  },
  created() {
    this.$Progress.start();
    this.getClient();
    this.$Progress.finish();
  },
  filters: {
    truncate: function (text, length, suffix) {
      return text.substring(0, length) + suffix;
    },
  },
  computed: {
    filteredItems() {
      return this.autocompleteItems.filter((i) => {
        return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
      });
    },
    
  },
};
</script>
