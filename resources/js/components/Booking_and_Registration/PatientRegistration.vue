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
            <v-form @submit.prevent="addClient">
              <v-container>
                <v-row>
                  <div class="ml-2 text-center">
                    <h4 class="text-primary">Information Details</h4>
                  </div>
                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.clinic_no"
                      label="Clinic Number"
                      required
                      type="text"
                    ></v-text-field>
                  </v-col>

                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.first_name"
                      label="First Name"
                      required
                    ></v-text-field>
                  </v-col>

                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.middle_name"
                      label="Middle Name"
                      required
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.last_name"
                      label="Last Name"
                      required
                    ></v-text-field>
                  </v-col>
                </v-row>
              </v-container>

              <!--  -->
              <v-container>
                <v-row>
                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.email"
                      label="Email"
                      required
                    ></v-text-field>
                  </v-col>

                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.address"
                      label="Address"
                      required
                    ></v-text-field>
                  </v-col>

                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.telephone_1"
                      label="Telephone 1"
                      required
                      type="number"
                    ></v-text-field>
                  </v-col>

                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.telephone_2"
                      label="Telephone 2"
                      type="number"
                    ></v-text-field>
                  </v-col>

                  <v-col cols="12" md="3">
                    <v-text-field
                      v-model="form.nationality"
                      label="Nationality"
                      required
                    ></v-text-field>
                  </v-col>
                </v-row>
              </v-container>
              <!-- Date and age -->
              <div class="ml-2 text-center">
                <h4 class="text-primary">Date of Birth Details</h4>
              </div>
              <v-container class="mt-2">
                <v-row>
                  <v-col cols="12" md="2">
                    <label for="">Not Known</label>
                    <div>
                      <input
                        type="checkbox"
                        name="age"
                        @click="dateOfBirth = !dateOfBirth"
                      />
                    </div>
                  </v-col>
                  <v-col v-if="dateOfBirth" cols="12" sm="6" md="4">
                    <v-text-field
                      v-model="form.date_of_birth"
                      label="Date of birth"
                      type="date"
                      required
                    ></v-text-field>
                  </v-col>
                  <v-col v-if="dateOfBirth" cols="12" sm="6" md="4">
                    <v-text-field
                      v-model="form.age"
                      label="Age"
                      type="number"
                      required
                    ></v-text-field>
                  </v-col>
                </v-row>
              </v-container>

              <v-divider></v-divider>

              <!-- for Gender -->
              <v-container>
                <div class="ml-2 text-center">
                  <h4 class="text-primary">Gender</h4>
                </div>
                <v-row>
                  <v-col cols="12" md="4">
                    <div class="form-check form-check-inline">
                      <input
                        @click="gender = false"
                        type="radio"
                        v-model="form.gender"
                        class="form-check-input"
                        id="gender"
                        name="gender"
                        value="male"
                      />
                      <label class="form-check-label" for="inlineCheckbox1"
                        >Male</label
                      >
                    </div>
                  </v-col>
                  <v-col cols="12" md="4">
                    <div class="form-check form-check-inline">
                      <input
                        @click="gender = false"
                        v-model="form.gender"
                        type="radio"
                        value="female"
                        name="gender"
                        class="form-check-input"
                        id="gender"
                      />
                      <label class="form-check-label" for="inlineCheckbox1"
                        >Female</label
                      >
                    </div>
                  </v-col>
                  <v-col cols="12" md="4">
                    <label for="">other</label>
                    <input
                      @click="gender = !gender"
                      type="radio"
                      name="gender"
                      class="mr-2"
                    />

                    <v-text-field
                      v-if="gender"
                      v-model="form.gender"
                      label="Please specify"
                      required
                    ></v-text-field>
                  </v-col>
                </v-row>
              </v-container>
              <v-divider></v-divider>

              <!-- For marital status -->
              <v-container>
                <div class="text-center">
                  <h4 class="text-primary">Marital status</h4>
                </div>
                <v-row>
                  <v-col cols="12" md="4">
                    <label for="">Married</label>
                    <input @click="(married = !married , unMarried = false)" value="married" v-model="form.marriage" type="radio" name="relationshipType" />
                  </v-col>
                  <v-col cols="12" md="4" v-if="married">
                    <label for="">Monogamous</label>
                    <input type="radio" name="married" value="monogamous" v-model="form.marital_status" />
                  </v-col>
                  <v-col cols="12" md="4" v-if="married">
                    <label for="">Polygamous</label>
                    <input type="radio" name="married" value="polygamous" v-model="form.marital_status" />
                  </v-col>
                  <v-col cols="12" md="4">
                    <label for="">UnMarried</label>
                    <input @click="(unMarried = !unMarried, married = false)" value="unMarried" v-model="form.marriage" type="radio" name="relationshipType" />
                  </v-col>
                  
                  <v-col cols="12" md="4" v-if="unMarried">
                    <label for="">Divorced</label>
                    <input type="radio" name="divorced" value="divorced" v-model="form.marital_status" />
                  </v-col>
                  <v-col cols="12" md="4" v-if="unMarried">
                    <label for="">Widowed</label>
                    <input type="radio" name="divorced" value="widowed" v-model="form.marital_status"/>
                  </v-col>
                  <v-col cols="12" md="4">
                    <label for="">Single</label>
                    <input type="radio" @click="(married = false, unMarried = false, form.marital_status = null)" name="relationshipType" value="single" v-model="form.marriage" />
                  </v-col>
                </v-row>
              </v-container>
              <v-divider></v-divider>

              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Sexual Orientaion</h4>
                </div>
                <div class="form-group py-1 px-1">
                  <div class="row">
                    <div class="col-lg-2 col-sm-6">
                      <label for="">Heterosexual</label>
                      <input type="radio" v-model="form.sexual_orientation" @click="sexualOrientation = false" value="heterosexual" name="sexual_orientation" />
                    </div>
                    <div class="col-lg-2 col-sm-6">
                      <label for="">Lesbian</label>
                      <input type="radio" v-model="form.sexual_orientation" @click="sexualOrientation = false" value="lesbian" name="sexual_orientation"/>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                      <label for="">Bisexual</label>
                      <input type="radio" v-model="form.sexual_orientation" @click="sexualOrientation = false" value="bisexual" name="sexual_orientation" />
                    </div>
                    <div class="col-lg-2 col-sm-6">
                      <label for="">MSM</label>
                      <input type="radio" v-model="form.sexual_orientation" @click="sexualOrientation = false" value="msm" name="sexual_orientation" />
                    </div>
                    <div class="col-lg-2 col-sm-6">
                      <label for="">Decline To Answer</label>
                      <input type="radio" v-model="form.sexual_orientation" @click="sexualOrientation = false" value="Decline To Answer" name="sexual_orientation" />
                    </div>
                    <div class="col-lg-6">
                      <label for="">other</label>
                      <input @click="sexualOrientation = !sexualOrientation"  type="radio" name="sexual_orientation" />
                      <v-text-field
                        v-if="sexualOrientation"
                        v-model="form.sexual_orientation"
                        label="Please specify"
                        required
                      ></v-text-field>
                    </div>
                  </div>
                </div>
              </v-container>
              <v-divider></v-divider>

              <!-- Medical History -->
              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Current/Past Medical History</h4>
                </div>
                <div class="form-group px-1 py-1">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Diabetes</label>
                      <input type="checkbox" @click="diabetes = !diabetes" v-model="form.medical_history" value="diabetes" />
                      <div v-if="diabetes">
                        <label for="">Details</label>
                        <textarea
                          name="diabetes details"
                          v-model="form.medical_history_details"
                          class="form-control"
                          id="diabetes details"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Hypertension</label>
                      <input
                        type="checkbox"
                        @click="hypertension = !hypertension"
                        v-model="form.medical_history"
                        value="hypertension"
                      />
                      <div v-if="hypertension">
                        <label for="">Details</label>
                        <textarea
                          v-model="form.medical_history_details"
                          class="form-control"
                          id="hypertension details"
                          name="hypertension details"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Asthma</label>
                      <input type="checkbox" @click="asthma = !asthma" v-model="form.medical_history" value="asthma" />
                      <div v-if="asthma">
                        <label for="">Details</label>
                        <textarea
                          v-model="form.medical_history_details"
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Cardiac Problems</label>
                      <input
                        type="checkbox"
                        @click="cardiacProblems = !cardiacProblems" v-model="form.medical_history" value="cardiac problems"
                      />
                      <div v-if="cardiacProblems">
                        <label for="">Details</label>
                        <textarea
                          v-model="form.medical_history_details"
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Kidney Problems</label>
                      <input
                        type="checkbox"
                        @click="kidneyProblems = !kidneyProblems" v-model="form.medical_history" value="Kidney Problems"
                      />
                      <div v-if="kidneyProblems">
                        <label for="">Details</label>
                        <textarea
                          v-model="form.medical_history_details"
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Liver Problems</label>
                      <input
                        type="checkbox"
                        @click="liverProblems = !liverProblems" v-model="form.medical_history" value="Liver Problems"
                      />
                      <div v-if="liverProblems">
                        <label for="">Details</label>
                        <textarea
                          v-model="form.medical_history_details"
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Cancer</label>
                      <input type="checkbox" @click="cancer = !cancer" v-model="form.medical_history" value="cancer" />
                      <div v-if="cancer">
                        <label for="">Details</label>
                        <textarea
                          v-model="form.medical_history_details"
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Other</label>
                      <input
                        type="checkbox"
                        @click="otherProblems = !otherProblems" v-model="form.medical_history"
                      />
                      <div v-if="otherProblems">
                        <label for="">Please Specify</label>
                        <textarea
                          v-model="form.medical_history_details"
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </v-container>
              <!-- Current Medications and Treatment -->
              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Current Medications/Treatments</h4>
                </div>
                <div class="form-group px-1 py-1">
                  <div class="row">
                    <div class="col-lg-6 col-sm-6">
                      <label for="">Yes</label>
                      <input
                        v-model="form.medication"
                        type="radio"
                        name="medicalTreatment"
                        value="yes"
                        @click="treatmentDetails = true"
                      />
                      <label v-if="treatmentDetails" for=""
                        >Treatment Details</label
                      >
                      <textarea 
                        v-model="form.medication_details"
                        v-if="treatmentDetails"
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"
                      ></textarea>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <label for="">No</label>
                      <input type="radio" @click="(treatmentDetails = false, form.medication_details = null)" v-model="form.medication" value="no" name="medicalTreatment" id="" />
                    </div>
                  </div>
                </div>
              </v-container>

              <!-- Allergies -->
              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Allergies</h4>
                </div>
                <div class="form-group px-1 py-1">
                  <div class="row">
                    <div class="col-lg-6 col-sm-6">
                      <label for="">Yes</label>
                      <input
                        v-model="form.allergies"
                        name="allergies"
                        type="radio"
                        id=""
                        value="yes"
                        @click="allergies = true"
                      />
                      <label v-if="allergies" for="">Allergies Details</label>
                      <textarea
                        v-model="form.allergies_details"
                        v-if="allergies"
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"
                      ></textarea>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <label for="">No</label>
                      <input type="radio" name="allergies" value="no" v-model="form.allergies" @click="(form.allergies_details = null, allergies = false)" />
                    </div>
                  </div>
                </div>
              </v-container>
              <v-divider></v-divider>

              <!-- Ethnicity -->
              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Ethnicity</h4>
                </div>
                <div class="form-group px-1 py-1">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Mandinka</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false"  name="ethnicity" value="mandinka" />
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Fula</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="fula"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Wolof</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="wolof"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Jola</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="jola"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Serahule</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="serahule" />
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Serer</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="serer"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Manjago</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="manjago"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Bambara</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="bambara"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Aku</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="aku"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Creole</label>
                      <input type="radio" v-model="form.ethnicity" @click="otherTribe = false" name="ethnicity" value="creole"/>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <label for="">Other</label>
                      <input
                        type="radio" name="ethnicity"
                        @click="(otherTribe = true, form.ethnicity = null)"
                      />
                      <div v-if="otherTribe">
                        <label for="">Please Specify</label>
                        <textarea
                          v-model="form.ethnicity"
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </v-container>
              <v-divider></v-divider>

              <!-- preferred form of contact -->
              <v-container>
                <div class="ml-2 text-center mb-2">
                  <h4 class="text-primary">Preffered form of contact</h4>
                </div>
                <v-row class="mt-2">
                  <v-col cols="12" md="3">
                    <label for="">Call</label>
                    <input type="radio" value="call" v-model="form.preferred_form_of_contact" name="preferredFormOfContact" @click="call = true" />
                  </v-col>
                  <v-col v-if="call" cols="12" md="3">
                    <label for="">8am to 12md | Morning</label>
                    <input type="checkbox" value="morning" v-model="form.contact_type" />
                  </v-col>
                  <v-col v-if="call" cols="12" md="3">
                    <label for="">12md to 4pm | Afternoon</label>
                    <input type="checkbox" value="afternoon" v-model="form.contact_type"  />
                  </v-col>
                  <v-col v-if="call" cols="12" md="3">
                    <label for="">4pm to 8pm | Evening</label>
                    <input type="checkbox" value="evening" v-model="form.contact_type" />
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">email</label>
                    <input type="radio" value="email" v-model="form.preferred_form_of_contact" name="preferredFormOfContact" @click="call = false" />
                  </v-col>
                </v-row>
              </v-container>
              <v-divider></v-divider>

              <!-- Education -->
              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Education</h4>
                </div>
                <v-row class="mt-2">
                  <v-col cols="12" md="3">
                    <label for="">Yes</label>
                    <input type="radio" v-model="form.educated" value="yes" @click="educated = true" name="educated" />
                  </v-col>
                  <v-col v-if="educated" cols="12" md="3">
                    <label for="">English</label>
                    <input type="checkbox" id="english"  v-model="form.education_type" value="english"/>
                  </v-col>
                  <v-col v-if="educated" cols="12" md="3">
                    <label for="">French</label>
                    <input type="checkbox" name="" id="" v-model="form.education_type" value="french" />
                  </v-col>
                  <v-col v-if="educated" cols="12" md="3">
                    <label for="">Arabic</label>
                    <input type="checkbox" v-model="form.education_type" value="arabic"/>
                  </v-col>
                  <v-col v-if="educated" cols="12" md="3">
                    <label for="">Other</label>
                    <input type="radio" @click="(otherEducated = true, unSelectMarried)">
                    <v-text-field
                      v-if="otherEducated"
                      v-model="form.education_type"
                      label="Please specify"
                      required
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">No</label>
                    <input type="radio" v-model="form.educated" value="no" @click="educated = false" name="educated" />
                  </v-col>
                </v-row>
              </v-container>
              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Level Of Education</h4>
                </div>
                <v-row class="mt-3">
                  <v-col cols="12" md="3">
                    <label for="">None</label>
                    <input type="radio" name="education_level" value="none" v-model="form.education_level"/>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Primary School</label>
                    <input type="radio" name="education_level" value="Primary School" v-model="form.education_level"/>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Junior Secondary</label>
                    <input type="radio" name="education_level" value="Junior Secondary" v-model="form.education_level"/>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Senior Secondary School</label>
                    <input type="radio" name="education_level" value="Senior Secondary" v-model="form.education_level"/>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Proffesional Training</label>
                    <input type="radio" name="education_level" value="Proffesional Training" v-model="form.education_level"/>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">College</label>
                    <input type="radio" name="education_level" value="College" v-model="form.education_level" />
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Bachelors Degree(BSc)</label>
                    <input type="radio" name="education_level" value="Bachelors Degree" v-model="form.education_level" />
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Masters Degree(MSc)</label>
                    <input type="radio" name="education_level" value="Masters Degree" v-model="form.education_level" />
                  </v-col>
                </v-row>
              </v-container>
              <v-divider></v-divider>

              <!-- Occupation -->
              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Occupation</h4>
                </div>
                <v-row>
                  <v-col cols="12" md="3">
                    <label for="">Student</label>
                    <input type="radio" name="occupation" v-model="form.occupation" value="student" />
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Domestic worker</label>
                    <input type="radio" name="occupation" v-model="form.occupation" value="domestic worker" />
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Manual Laborer</label>
                    <input type="radio" name="occupation" v-model="form.occupation" />
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Skilled Laborer</label>
                    <input type="radio" name="occupation" v-model="form.occupation" value="skilled laborer" @click="skilledLaborer = !skilledLaborer" />

                    <label v-if="skilledLaborer" for="">Details</label>
                    <textarea
                      v-model="form.occupation_type"
                      v-if="skilledLaborer"
                      class="form-control"
                      id="exampleFormControlTextarea1"
                      rows="3"
                    ></textarea>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Formal employment</label>
                    <input type="radio" name="occupation" v-model="form.occupation" value="formal employement" id="" @click="formalEmployment = !formalEmployment">
                    <div v-if="formalEmployment">
                      <label for="">FT</label>
                      <input type="checkbox" name="" id="" />
                      <label for="">PT</label>
                      <input type="checkbox" name="" id="" />
                    </div>
                    <label v-if="formalEmployment" for="">Details</label>
                    <textarea
                      v-model="form.occupation_type"
                      v-if="formalEmployment"
                      class="form-control"
                      id="exampleFormControlTextarea1"
                      rows="3"
                    ></textarea>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Informal / Self-Employeed</label>
                    <input type="radio" name="occupation" v-model="form.occupation" value="informal employment" id="" @click="informalEmployment = !informalEmployment"/>

                    <div v-if="informalEmployment">
                      <label for="">Details</label>
                      <textarea
                        v-model="form.occupation_type"
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"
                      ></textarea>
                    </div>
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Unemployeed / Seeking Employement</label>
                    <input type="radio" name="occupation" v-model="form.occupation" value="unemployed" />
                  </v-col>
                  <v-col cols="12" md="3">
                    <label for="">Others</label>
                    <input type="radio" name="occupation" v-model="form.occupation" value="otherOccupation" id="" @click="otherOccupation = !otherOccupation">
                    <v-text-field
                      v-model="form.occupation_type"
                      v-if="otherOccupation"
                      label="Please speicify"
                      required
                    ></v-text-field>
                  </v-col>
                </v-row>
              </v-container>
              <v-divider></v-divider>
            
              <v-container>
                <div class="mt-3 ml-2 text-center">
                  <h4 class="text-primary">Reason For Visiting</h4>
                </div>
                <v-row align="center">
                  <v-col cols="12" md="4" class="centered-input" align="center" >
                    <v-text-field label="Please specify" v-model="form.reason_for_visiting"></v-text-field>
                  </v-col>
                </v-row>
              </v-container>
              
              <!-- footer -->
              <!-- <v-footer>
                <v-container>
                  <v-row>
                    <v-col>
                      <v-btn class="float-left" type="submit">submit</v-btn>
                    </v-col>
                    <v-col>
                      <v-btn @click="clear" class="float-right btn-danger" color="red">
                        Back 
                      </v-btn>
                    </v-col>
                  </v-row>
                </v-container>
              </v-footer> -->
            <v-footer>
              <v-container>
                <!-- <router-link to="/clients">
                  <button
                    type="button"
                    class="btn btn-danger float-left mb-2"
                  >
                  Close
                 </button>
                </router-link> -->
                <button
                  type="submit"
                  class="btn btn-primary float-left"
                >
                  Submit
                </button>
                <router-link to="/clients" class="btn btn-danger float-right">
                  <i class="fas fa-arrow-left">
                    Back
                  </i>
                </router-link>
                 
              </v-container>
            </v-footer>
              
              
              </v-form>

            

            <!-- <form @submit.prevent="addClient"> -->

            <!-- Sexual Orientation -->

            <!-- <div class="footer px-1 py-1">
                <router-link to="/clients">
                  <button
                    type="button"
                    class="btn btn-danger float-left mb-2"
                  >
                  Close
                 </button>
                </router-link>
                <button
                  type="submit"
                  class="btn btn-primary float-right mb-2"
                >
                  Create
                </button>
                 <v-btn
                  type="submit"
                  class="float-right"
                  depressed
                  color="primary"
                >
                  Submit
                </v-btn>
              </div> -->
            <!-- </form> -->
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
      dateOfBirth: true,
      gender: false,
      married: false,
      unMarried: false,
      sexualOrientation: false,
      diabetes: false,
      hypertension: false,
      asthma: false,
      cardiacProblems: false,
      kidneyProblems: false,
      liverProblems: false,
      otherProblems: false,
      cancer: false,
      treatmentDetails: false,
      allergies: false,
      mandinka: false,
      fula: false,
      wolof: false,
      jola: false,
      serahule: false,
      serer: false,
      manjago: false,
      bambara: false,
      aku: false,
      otherTribe: false,
      call: false,
      educated: false,
      otherEducated: false,
      skilledLaborer: false,
      formalEmployment: false,
      informalEmployment: false,
      otherOccupation: false,

      form: new Form({
        clinic_no: "",
        first_name: "",
        last_name: "",
        address: "",
        date_of_birth: "",
        gender: "",
        marriage: "",
        marital_status: "",
        nationality: "",
        sexual_orientation: "",
        medical_history: [],
        medical_history_details: [],
        medication: "",
        medication_details: "",
        allergies: "",
        allergies_details: "",
        ethnicity: "",
        ethnicity_details: "",
        telephone_1: "",
        telephone_2: "",
        email: "",
        preferred_form_of_contact: "",
        contact_type: [],
        educated: "",
        education_type: [],
        education_level: "",
        // education_level_type: [],
        occupation: "",
        occupation_type: "",
        reason_for_visiting: ""
      }),
    };
  },
  methods: {
    unSelectMarried(){
    
    },
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
            this.$router.push("/clients");
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
  mounted() {},
};
</script>
<style scoped>
  .centered-input input {
    text-align: center;
  }
</style>
