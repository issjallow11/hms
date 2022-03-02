<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Register Client</h3>
            </div>
            <!-- /.card-header -->
              <form
              @submit.prevent="addClient"
             >
                <div class="form-group py-1 px-1">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6">
                      <label>Clinic N0:</label>
                        <input
                          v-model="form.clinic_no"
                          type="number"
                          name="clinic_no"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('clinic_no') }"
                        />
                        <has-error :form="form" field="clinic_no"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>First Name</label>
                        <input
                          v-model="form.first_name"
                          type="text"
                          name="first_name"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('first_name') }"
                        />
                        <has-error :form="form" field="first_name"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>Middle Name</label>
                        <input
                          v-model="form.middle_name"
                          type="text"
                          name="middle_name"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('middle_name') }"
                        />
                        <has-error :form="form" field="middle_name"></has-error>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                      <label>Last Name</label>
                        <input
                          v-model="form.last_name"
                          type="text"
                          name="last_name"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('last_name') }"
                        />
                        <has-error :form="form" field="last_name"></has-error>
                    </div>
                  </div>
                </div>

                <div class="form-group py-1 px-1">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6">
                      <label>Address:</label>
                        <input
                          v-model="form.address"
                          type="text"
                          name="address"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('address') }"
                        />
                        <has-error :form="form" field="address"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>Date of Birth</label>
                        <input
                          v-model="form.date_of_birth"
                          type="Date"
                          name="date_of_birth"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('date_of_birth') }"
                        />
                        <has-error :form="form" field="date_of_birth"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>Age</label>
                        <input
                          v-model="form.age"
                          type="number"
                          name="age"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('age') }"
                        />
                        <has-error :form="form" field="age"></has-error>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                      <label>Gender</label>
                        <input
                          v-model="form.gender"
                          type="text"
                          name="gender"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('gender') }"
                        />
                        <has-error :form="form" field="gender"></has-error>
                    </div>
                  </div>
                </div>

                <div class="form-group py-1 px-1">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6">
                      <label>marital status</label>
                        <input
                          v-model="form.marital_status"
                          type="text"
                          name="marital_status"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('marital_status') }"
                        />
                        <has-error :form="form" field="marital_status"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>Nationality</label>
                        <input
                          v-model="form.nationality"
                          type="text"
                          name="nationality"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('nationality') }"
                        />
                        <has-error :form="form" field="nationality"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>Sexual Orietation</label>
                        <input
                          v-model="form.sexual_orientation"
                          type="text"
                          name="sexual_orientation"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('sexual_orientation') }"
                        />
                        <has-error :form="form" field="sexual_orientation"></has-error>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                      <label>Medical History</label>
                        <input
                          v-model="form.medical_history"
                          type="text"
                          name="medical_history"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('medical_history') }"
                        />
                        <has-error :form="form" field="medical_history"></has-error>
                    </div>
                  </div>
                </div>
            
                <div class="form-group py-1 px-1">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6">
                      <label>Medications</label>
                        <input
                          v-model="form.medications"
                          type="text"
                          name="medications"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('medications') }"
                        />
                        <has-error :form="form" field="medications"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>Allergies</label>
                        <input
                          v-model="form.allergies"
                          type="text"
                          name="allergies"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('allergies') }"
                        />
                        <has-error :form="form" field="allergies"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>ethnicity</label>
                        <input
                          v-model="form.ethnicity"
                          type="text"
                          name="ethnicity"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('ethnicity') }"
                        />
                        <has-error :form="form" field="ethnicity"></has-error>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                      <label>Telephone 1</label>
                        <input
                          v-model="form.telephone_1"
                          type="text"
                          name="telephone_1"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('telephone_1') }"
                        />
                        <has-error :form="form" field="telephone_1"></has-error>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                      <label>Telephone 2</label>
                        <input
                          v-model="form.telephone_2"
                          type="text"
                          name="telephone_2"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('telephone_2') }"
                        />
                        <has-error :form="form" field="telephone_2"></has-error>
                    </div>
                  </div>
                </div>

                <div class="form-group py-1 px-1">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6">
                      <label>Email</label>
                        <input
                          v-model="form.email"
                          type="text"
                          name="email"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('email') }"
                        />
                        <has-error :form="form" field="email"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>Preferred Form of Contact</label>
                        <input
                          v-model="form.preferred_form_of_contact"
                          type="text"
                          name="preferred_form_of_contact"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('preferred_form_of_contact') }"
                        />
                        <has-error :form="form" field="preferred_form_of_contact"></has-error>
                    </div>

                     <div class="col-lg-3 col-sm-6">
                      <label>Education</label>
                        <input
                          v-model="form.education"
                          type="text"
                          name="education"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('education') }"
                        />
                        <has-error :form="form" field="education"></has-error>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                      <label>Level of Education</label>
                        <input
                          v-model="form.education_level"
                          type="text"
                          name="education_level"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('education_level') }"
                        />
                        <has-error :form="form" field="education_level"></has-error>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                      <label>Occupation</label>
                        <input
                          v-model="form.occupation"
                          type="text"
                          name="occupation"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('occupation') }"
                        />
                        <has-error :form="form" field="occupation"></has-error>
                    </div>
                  </div>
                </div>

<!-- 
                <div class="form-group">
                  <label>Description</label>
                  <input
                    v-model="form.description"
                    type="text"
                    name="description"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('description') }"
                  />
                  <has-error :form="form" field="description"></has-error>
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input
                    v-model="form.price"
                    type="text"
                    name="price"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('price') }"
                  />
                  <has-error :form="form" field="price"></has-error>
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" v-model="form.category_id">
                    <option
                      v-for="(cat, index) in categories"
                      :key="index"
                      :value="index"
                      :selected="index == form.category_id"
                    >
                      {{ cat }}
                    </option>
                  </select>
                  <has-error :form="form" field="category_id"></has-error>
                </div>                 -->
              <div class="footer px-1 py-1">
                <router-link to="/booking/clients">
                  <button
                    type="button"
                    class="btn btn-secondary float-left"
                  >
                  Close
                 </button>
                </router-link>
                <button v-show="editmode" type="submit" class="btn btn-success">
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
import VueTagsInput from "@johmun/vue-tags-input";

export default {
  components: {
    VueTagsInput,
  },
  data() {
    return {
      // editmode: false,
      // products: {},
      form: new Form({
        clinic_no: "",
        first_name: "",
        last_name: "",
        address: "",
        date_of_birth: "",
        gender: "",
        marital_status: "",
        nationality: "",
        sexual_orientation: "",
        medical_history: "",
        medications: "",
        allergies: "",
        ethnicity: "",
        telephone_1: "",
        telephone_2: "",
        email: "",
        preferred_form_of_contact: "",
        education: "",
        education_level: "",
        occupation: "",
      }),
      // categories: [],

      // tag: "",
      // autocompleteItems: [],
    };
  },
  methods: {
    // getResults(page = 1) {
    //   this.$Progress.start();

    //   axios
    //     .get("api/product?page=" + page)
    //     .then(({ data }) => (this.products = data.data));

    //   this.$Progress.finish();
    // },
    // loadProducts() {
    //   // if(this.$gate.isAdmin()){
    //   axios.get("api/product").then(({ data }) => (this.products = data.data));
    //   // }
    // },
    // loadCategories() {
    //   axios
    //     .get("/api/category/list")
    //     .then(({ data }) => (this.categories = data.data));
    // },
    // loadTags() {
    //   axios
    //     .get("/api/tag/list")
    //     .then((response) => {
    //       this.autocompleteItems = response.data.data.map((a) => {
    //         return { text: a.name, id: a.id };
    //       });
    //     })
    //     .catch(() => console.warn("Oh. Something went wrong"));
    // },
    // editModal(product) {
    //   this.editmode = true;
    //   this.form.reset();
    //   $("#addNew").modal("show");
    //   this.form.fill(product);
    // },
    // newModal() {
    //   this.editmode = false;
    //   this.form.reset();
    //   $("#addNew").modal("show");
    // },
    addClient() {
      this.$Progress.start();

      this.form
        .post("/api/clients")
        .then((data) => {
          if (data.data.success) {
            Toast.fire({
              icon: "success",
              title: data.data.message,
            });
            this.$Progress.finish();
            this.$router.push({ name: 'booking/clients' })
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
    // updateProduct() {
    //   this.$Progress.start();
    //   this.form
    //     .put("api/product/" + this.form.id)
    //     .then((response) => {
    //       // success
    //       $("#addNew").modal("hide");
    //       Toast.fire({
    //         icon: "success",
    //         title: response.data.message,
    //       });
    //       this.$Progress.finish();
    //       //  Fire.$emit('AfterCreate');

    //       this.loadProducts();
    //     })
    //     .catch(() => {
    //       this.$Progress.fail();
    //     });
    // },
    // deleteProduct(id) {
    //   Swal.fire({
    //     title: "Are you sure?",
    //     text: "You won't be able to revert this!",
    //     showCancelButton: true,
    //     confirmButtonColor: "#d33",
    //     cancelButtonColor: "#3085d6",
    //     confirmButtonText: "Yes, delete it!",
    //   }).then((result) => {
    //     // Send request to the server
    //     if (result.value) {
    //       this.form
    //         .delete("api/product/" + id)
    //         .then(() => {
    //           Swal.fire("Deleted!", "Your file has been deleted.", "success");
    //           // Fire.$emit('AfterCreate');
    //           this.loadProducts();
    //         })
    //         .catch((data) => {
    //           Swal.fire("Failed!", data.message, "warning");
    //         });
    //     }
    //   });
    // },
  },
  mounted() {},
  created() {
    this.$Progress.start();
    // this.addClient();
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
