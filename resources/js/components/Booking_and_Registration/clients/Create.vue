<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h3 class="text-center">Register Client</h3>
            </div>
            <!-- /.card-header -->
            <form @submit.prevent="addClient">
              <v-container>
                <div>
                  <div class="ml-2 text-center mb-2">
                    <h4>Basic Info</h4>
                  </div>
                  <div class="form-group p-2">
                    <div class="row">
                      <div class="col-3">
                        <label for="">Clinic Number</label>
                        <input type="text" class="form-control" placeholder="" disabled v-model="form.client_no">
                      </div>
                      <div class="col-3">
                        <label for="">First Name<span class="red">*</span></label>
                        <input type="text" class="form-control" v-model="form.first_name"
                          :class="{ 'is-invalid': form.errors.has('first_name') }" required>
                        <has-error :form="form" field="first_name"></has-error>

                      </div>
                      <div class="col-3">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" v-model="form.middle_name"
                          :class="{ 'is-invalid': form.errors.has('middle_name') }">
                        <has-error :form="form" field="middle_name"></has-error>
                      </div>
                      <div class="col-3">
                        <label for="">Last Name <span class="red">*</span></label>
                        <input type="text" class="form-control" v-model="form.last_name"
                          :class="{ 'is-invalid': form.errors.has('last_name') }" required>
                        <has-error :form="form" field="last_name"></has-error>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <label for="">Email <span class="red">*</span></label>
                        <input type="text" class="form-control" v-model="form.email"
                          :class="{ 'is-invalid': form.errors.has('email') }" required>
                        <has-error :form="form" field="email"></has-error>
                      </div>
                      <div class="col-3">
                        <label for="">Address <span class="red">*</span></label>
                        <input type="text" class="form-control" v-model="form.address"
                          :class="{ 'is-invalid': form.errors.has('address') }" required>
                        <has-error :form="form" field="address"></has-error>
                      </div>
                      <div class="col-3">
                        <label for="">Telephone 1 <span class="red">*</span></label>
                        <input type="text" class="form-control" v-model="form.telephone_1"
                          :class="{ 'is-invalid': form.errors.has('telephone_1') }" required>
                        <has-error :form="form" field="telephone_1"></has-error>
                      </div>
                      <div class="col-3">
                        <label for="">Telephone 2 <span class="red">*</span></label>
                        <input type="text" class="form-control" v-model="form.telephone_2"
                          :class="{ 'is-invalid': form.errors.has('telephone_2') }">
                        <has-error :form="form" field="telephone_2"></has-error>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-3">
                        <label for="nationality">Nationality</label>
                        <select class="form-control" name="nationality" v-model="form.nationality"
                          :class="{ 'is-invalid': form.errors.has('nationality') }">
                          <option value="AFGHAN">AFGHAN</option>
                          <option value="ALBANIAN">ALBANIAN</option>
                          <option value="ALGERIAN">ALGERIAN</option>
                          <option value="AMERICAN">AMERICAN</option>
                          <option value="ANDORRAN">ANDORRAN</option>
                          <option value="ANGOLAN">ANGOLAN</option>
                          <option value="ANTIGUANS">ANTIGUANS</option>
                          <option value="ARGENTINEAN">ARGENTINEAN</option>
                          <option value="ARMENIAN">ARMENIAN</option>
                          <option value="AUSTRALIAN">AUSTRALIAN</option>
                          <option value="AUSTRIAN">AUSTRIAN</option>
                          <option value="AZERBAIJANI">AZERBAIJANI</option>
                          <option value="BAHAMIAN">BAHAMIAN</option>
                          <option value="BAHRAINI">BAHRAINI</option>
                          <option value="BANGLADESHI">BANGLADESHI</option>
                          <option value="BARBADIAN">BARBADIAN</option>
                          <option value="BARBUDANS">BARBUDANS</option>
                          <option value="BATSWANA">BATSWANA</option>
                          <option value="BELARUSIAN">BELARUSIAN</option>
                          <option value="BELGIAN">BELGIAN</option>
                          <option value="BELIZEAN">BELIZEAN</option>
                          <option value="BENINESE">BENINESE</option>
                          <option value="BHUTANESE">BHUTANESE</option>
                          <option value="BOLIVIAN">BOLIVIAN</option>
                          <option value="BOSNIAN">BOSNIAN</option>
                          <option value="BRAZILIAN">BRAZILIAN</option>
                          <option value="BRITISH">BRITISH</option>
                          <option value="BRUNEIAN">BRUNEIAN</option>
                          <option value="BULGARIAN">BULGARIAN</option>
                          <option value="BURKINABE">BURKINABE</option>
                          <option value="BURMESE">BURMESE</option>
                          <option value="BURUNDIAN">BURUNDIAN</option>
                          <option value="CAMBODIAN">CAMBODIAN</option>
                          <option value="CAMEROONIAN">CAMEROONIAN</option>
                          <option value="CANADIAN">CANADIAN</option>
                          <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                          <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                          <option value="CHADIAN">CHADIAN</option>
                          <option value="CHILEAN">CHILEAN</option>
                          <option value="CHINESE">CHINESE</option>
                          <option value="COLOMBIAN">COLOMBIAN</option>
                          <option value="COMORAN">COMORAN</option>
                          <option value="CONGOLESE">CONGOLESE</option>
                          <option value="COSTA RICAN">COSTA RICAN</option>
                          <option value="CROATIAN">CROATIAN</option>
                          <option value="CUBAN">CUBAN</option>
                          <option value="CYPRIOT">CYPRIOT</option>
                          <option value="CZECH">CZECH</option>
                          <option value="DANISH">DANISH</option>
                          <option value="DJIBOUTI">DJIBOUTI</option>
                          <option value="DOMINICAN">DOMINICAN</option>
                          <option value="DUTCH">DUTCH</option>
                          <option value="EAST TIMORESE">EAST TIMORESE</option>
                          <option value="ECUADOREAN">ECUADOREAN</option>
                          <option value="EGYPTIAN">EGYPTIAN</option>
                          <option value="EMIRIAN">EMIRIAN</option>
                          <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                          </option>
                          <option value="ERITREAN">ERITREAN</option>
                          <option value="ESTONIAN">ESTONIAN</option>
                          <option value="ETHIOPIAN">ETHIOPIAN</option>
                          <option value="FIJIAN">FIJIAN</option>
                          <option value="FILIPINO">FILIPINO</option>
                          <option value="FINNISH">FINNISH</option>
                          <option value="FRENCH">FRENCH</option>
                          <option value="GABONESE">GABONESE</option>
                          <option value="GAMBIAN" selected>GAMBIAN</option>
                          <option value="GEORGIAN">GEORGIAN</option>
                          <option value="GERMAN">GERMAN</option>
                          <option value="GHANAIAN">GHANAIAN</option>
                          <option value="GREEK">GREEK</option>
                          <option value="GRENADIAN">GRENADIAN</option>
                          <option value="GUATEMALAN">GUATEMALAN</option>
                          <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                          <option value="GUINEAN">GUINEAN</option>
                          <option value="GUYANESE">GUYANESE</option>
                          <option value="HAITIAN">HAITIAN</option>
                          <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                          <option value="HONDURAN">HONDURAN</option>
                          <option value="HUNGARIAN">HUNGARIAN</option>
                          <option value="ICELANDER">ICELANDER</option>
                          <option value="INDIAN">INDIAN</option>
                          <option value="INDONESIAN">INDONESIAN</option>
                          <option value="IRANIAN">IRANIAN</option>
                          <option value="IRAQI">IRAQI</option>
                          <option value="IRISH">IRISH</option>
                          <option value="ISRAESLI">ISRAELI</option>
                          <option value="ITALIAN">ITALIAN</option>
                          <option value="IVORIAN">IVORIAN</option>
                          <option value="JAMAICAN">JAMAICAN</option>
                          <option value="JAPANESE">JAPANESE</option>
                          <option value="JORDANIAN">JORDANIAN</option>
                          <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                          <option value="KENYAN">KENYAN</option>
                          <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                          </option>
                          <option value="KUWAITI">KUWAITI</option>
                          <option value="KYRGYZ">KYRGYZ</option>
                          <option value="LAOTIAN">LAOTIAN</option>
                          <option value="LATVIAN">LATVIAN</option>
                          <option value="LEBANESE">LEBANESE</option>
                          <option value="LIBERIAN">LIBERIAN</option>
                          <option value="LIBYAN">LIBYAN</option>
                          <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                          <option value="LITHUANIAN">LITHUANIAN</option>
                          <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                          <option value="MACEDONIAN">MACEDONIAN</option>
                          <option value="MALAGASY">MALAGASY</option>
                          <option value="MALAWIAN">MALAWIAN</option>
                          <option value="MALAYSIAN">MALAYSIAN</option>
                          <option value="MALDIVAN">MALDIVAN</option>
                          <option value="MALIAN">MALIAN</option>
                          <option value="MALTESE">MALTESE</option>
                          <option value="MARSHALLESE">MARSHALLESE</option>
                          <option value="MAURITANIAN">MAURITANIAN</option>
                          <option value="MAURITIAN">MAURITIAN</option>
                          <option value="MEXICAN">MEXICAN</option>
                          <option value="MICRONESIAN">MICRONESIAN</option>
                          <option value="MOLDOVAN">MOLDOVAN</option>
                          <option value="MONACAN">MONACAN</option>
                          <option value="MONGOLIAN">MONGOLIAN</option>
                          <option value="MOROCCAN">MOROCCAN</option>
                          <option value="MOSOTHO">MOSOTHO</option>
                          <option value="MOTSWANA">MOTSWANA</option>
                          <option value="MOZAMBICAN">MOZAMBICAN</option>
                          <option value="NAMIBIAN">NAMIBIAN</option>
                          <option value="NAURUAN">NAURUAN</option>
                          <option value="NEPALESE">NEPALESE</option>
                          <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                          <option value="NI-VANUATU">NI-VANUATU</option>
                          <option value="NICARAGUAN">NICARAGUAN</option>
                          <option value="NIGERIEN">NIGERIEN</option>
                          <option value="NORTH KOREAN">NORTH KOREAN</option>
                          <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                          <option value="NORWEGIAN">NORWEGIAN</option>
                          <option value="OMANI">OMANI</option>
                          <option value="PAKISTANI">PAKISTANI</option>
                          <option value="PALAUAN">PALAUAN</option>
                          <option value="PANAMANIAN">PANAMANIAN</option>
                          <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                          <option value="PARAGUAYAN">PARAGUAYAN</option>
                          <option value="PERUVIAN">PERUVIAN</option>
                          <option value="POLISH">POLISH</option>
                          <option value="PORTUGUESE">PORTUGUESE</option>
                          <option value="QATARI">QATARI</option>
                          <option value="ROMANIAN">ROMANIAN</option>
                          <option value="RUSSIAN">RUSSIAN</option>
                          <option value="RWANDAN">RWANDAN</option>
                          <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                          <option value="SALVADORAN">SALVADORAN</option>
                          <option value="SAMOAN">SAMOAN</option>
                          <option value="SAN MARINESE">SAN MARINESE</option>
                          <option value="SAO TOMEAN">SAO TOMEAN</option>
                          <option value="SAUDI">SAUDI</option>
                          <option value="SCOTTISH">SCOTTISH</option>
                          <option value="SENEGALESE">SENEGALESE</option>
                          <option value="SERBIAN">SERBIAN</option>
                          <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                          <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                          <option value="SINGAPOREAN">SINGAPOREAN</option>
                          <option value="SLOVAKIAN">SLOVAKIAN</option>
                          <option value="SLOVENIAN">SLOVENIAN</option>
                          <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                          <option value="SOMALI">SOMALI</option>
                          <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                          <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                          <option value="SPANISH">SPANISH</option>
                          <option value="SRI LANKAN">SRI LANKAN</option>
                          <option value="SUDANESE">SUDANESE</option>
                          <div class="ml-2 text-center mb-2">
                            <h4 class="text-primary">Preffered form of contact</h4>
                          </div>
                          <option value="SURINAMER">SURINAMER</option>
                          <option value="SWAZI">SWAZI</option>
                          <option value="SWEDISH">SWEDISH</option>
                          <option value="SWISS">SWISS</option>
                          <option value="SYRIAN">SYRIAN</option>
                          <option value="TAIWANESE">TAIWANESE</option>
                          <option value="TAJIK">TAJIK</option>
                          <option value="TANZANIAN">TANZANIAN</option>
                          <option value="THAI">THAI</option>
                          <option value="TOGOLESE">TOGOLESE</option>
                          <option value="TONGAN">TONGAN</option>
                          <option value="TRINIDADIAN OR TOBAGONIAN">TRINIDADIAN OR
                            TOBAGONIAN</option>
                          <option value="TUNISIAN">TUNISIAN</option>
                          <option value="TURKISH">TURKISH</option>
                          <option value="TUVALUAN">TUVALUAN</option>
                          <option value="UGANDAN">UGANDAN</option>
                          <option value="UKRAINIAN">UKRAINIAN</option>
                          <option value="URUGUAYAN">URUGUAYAN</option>
                          <option value="UZBEKISTANI">Uzbekistani</option>
                          <option value="VENEZUELAN">VENEZUELAN</option>
                          <option value="VIETNAMESE">VIETNAMESE</option>
                          <option value="WELSH">WELSH</option>
                          <option value="YEMENITE">YEMENITE</option>
                          <option value="ZAMBIAN">ZAMBIAN</option>
                          <option value="ZIMBABWEAN">ZIMBABWEAN</option>
                        </select>
                        <has-error :form="form" field="nationality"></has-error>
                      </div>
                      <div class="col-3">
                        <label for="">Not Known</label>
                        <div>
                          <input type="checkbox" name="age" @click="dateOfBirth = !dateOfBirth" />
                        </div>
                      </div>
                      <div v-if="dateOfBirth" class="col-3">
                        <label for="">Date of Birth</label>
                        <input type="date" class="form-control" v-model="form.date_of_birth"
                          :class="{ 'is-invalid': form.errors.has('date_of_birth') }">
                        <has-error :form="form" field="date_of_birth"></has-error>
                      </div>
                      <div class="col-3" v-if="dateOfBirth">
                        <label for="">Age</label>
                        <input type="number" class="form-control" disabled v-model="calAge">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group p-2">
                  <div class="row">
                    <div class="col-lg-4">
                      <label for="">Gender<span class="red">*</span></label>
                      <select name="" id="" class="form-control" v-model="form.gender"
                        :class="{ 'is-invalid': form.errors.has('gender') }">
                        <option value="">Please select</option>
                        <option :value=gender.id v-for="gender in genders" :key="gender.id">{{ gender.name }}</option>
                      </select>
                      <has-error :form="form" field="gender"></has-error>
                    </div>
                    <div class="col-lg-4">
                      <label for="">Sexual Orientation</label>
                      <select name="" id="" class="form-control" v-model="form.sexual_orientation">
                        <option value="">Please select</option>
                        <option :value=sex.id v-for="sex in sexualOrientations" :key="sex.id">{{ sex.name }}</option>
                      </select>
                    </div>
                    <div class="col-lg-4">
                      <label for="">Ethnicity</label>
                      <select name="" id="" class="form-control" v-model="form.ethnicity">
                        <option value="">Please select</option>
                        <option :value=ethnicity.id v-for="ethnicity in ethnicitys" :key="ethnicity.id">
                          {{ ethnicity.name }}</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group p-2">
                  <div class="row">
                    <div class="col-lg-3">
                      <label for="">Married <span class="red">*</span></label>
                      <input @click="(married = !married, unMarried = false)" value="married" v-model="form.marriage"
                        type="radio" name="relationshipType" :class="{ 'is-invalid': form.errors.has('marriage') }"
                        required />
                      <has-error :form="form" field="marriage"></has-error>
                    </div>
                    <div class="col-lg-3" v-if="married">
                      <label for="">Monogamous</label>
                      <input type="radio" name="married" value="monogamous" v-model="form.marital_status" />
                    </div>
                    <div class="col-lg-3" v-if="married">
                      <label for="">Polygamous</label>
                      <input type="radio" name="married" value="polygamous" v-model="form.marital_status" />
                    </div>
                    <div class="col-lg-3">
                      <label for="">UnMarried</label>
                      <input @click="(unMarried = !unMarried, married = false)" value="unMarried"
                        v-model="form.marriage" type="radio" name="relationshipType" />
                    </div>
                    <div class="col-lg-3" v-if="unMarried">
                      <label for="">Divorced</label>
                      <input type="radio" name="divorced" value="divorced" v-model="form.marital_status" />
                    </div><span class="red">*</span>
                    <div class="col-lg-3" v-if="unMarried">
                      <label for="">Widowed</label>
                      <input type="radio" name="divorced" value="widowed" v-model="form.marital_status" />
                    </div>
                    <div class="col-lg-3">
                      <label for="">Single</label>
                      <input type="radio" @click="(married = false, unMarried = false, form.marital_status = null)"
                        name="relationshipType" value="single" v-model="form.marriage" />
                    </div>
                  </div>
                </div>
                <!-- current medical history -->
                <div class="form-group p-2">
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="">Medical Conditions</label>
                      <vue-tags-input v-model="form.medical_history" :tags="form.tags"
                        :autocomplete-items="filteredItems" @tags-changed="newTags => form.tags = newTags" />
                      <has-error :form="form" field="tags"></has-error>
                    </div>
                    <div class="col-lg-6">
                      <label for="">Medical Condition Details</label>
                      <textarea name="medical history details" v-model="form.medical_history_details"
                        class="form-control" id="diabetes details" rows="3"></textarea>
                    </div>
                  </div>
                </div>
                <v-container>
                  <div class="form-group px-1 py-1">
                    <div class="row">
                      <div class="col-lg-3">
                        <div>
                          <h4>Medications</h4>
                        </div>
                        <label for="">Yes</label>
                        <input v-model="form.medication" type="radio" name="medicalTreatment" value="yes"
                          @click="treatmentDetails = true" />
                        <label v-if="treatmentDetails" for="">Treatment Details</label>
                        <textarea v-model="form.medication_details" v-if="treatmentDetails" class="form-control"
                          id="exampleFormControlTextarea1" rows="3"></textarea>
                        <label for="">No</label>
                        <input type="radio" @click="(treatmentDetails = false, form.medication_details = null)"
                          v-model="form.medication" value="no" name="medicalTreatment" id="" />
                      </div>

                      <div class="col-lg-3">
                        <h4>Allergies</h4>
                        <label for="">Yes</label>
                        <input v-model="form.allergies" name="allergies" type="radio" id="" value="yes"
                          @click="allergies = true" />
                        <label v-if="allergies" for="">Allergies Details</label>
                        <textarea v-model="form.allergies_details" v-if="allergies" class="form-control"
                          id="exampleFormControlTextarea1" rows="3"></textarea>
                        <label for="">No</label>
                        <input type="radio" name="allergies" value="no" v-model="form.allergies"
                          @click="(form.allergies_details = null, allergies = false)" />
                      </div>
                      <div class="col-lg-3">
                        <label for="">Occupation</label>
                        <select name="" id="" class="form-control" v-model="form.occupation">
                          <option value="">Please select</option>
                          <option :value=occupation.id v-for="occupation in occupations" :key="occupation.id">
                            {{ occupation.name }}</option>
                        </select>
                      </div>
                      <div class="col-lg-3">
                        <label for="">Education Level</label>
                        <select name="" id="" class="form-control">
                          <option value="">Please select</option>
                          <option :value=educationLevel.id v-for="educationLevel in educationLevels"
                            :key="educationLevel.id">{{ educationLevel.name }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </v-container>

                <v-container>
                  <div class="ml-2 text-center mb-2">
                    <h4>Preffered form of contact</h4>
                  </div>
                  <v-row class="mt-2">
                    <v-col cols="12" md="3">
                      <label for="">Call</label>
                      <input type="radio" value="call" v-model="form.preferred_form_of_contact"
                        name="preferredFormOfContact" @click="call = true" />
                    </v-col>
                    <v-col v-if="call" cols="12" md="3">
                      <label for="">8am to 12md | Morning</label>
                      <input type="checkbox" value="morning" v-model="form.contact_type" />
                    </v-col>
                    <v-col v-if="call" cols="12" md="3">
                      <label for="">12md to 4pm | Afternoon</label>
                      <input type="checkbox" value="afternoon" v-model="form.contact_type" />
                    </v-col>
                    <v-col v-if="call" cols="12" md="3">
                      <label for="">4pm to 8pm | Evening</label>
                      <input type="checkbox" value="evening" v-model="form.contact_type" />
                    </v-col>
                    <v-col cols="12" md="3">
                      <label for="">email</label>
                      <input type="radio" value="email" v-model="form.preferred_form_of_contact"
                        name="preferredFormOfContact" @click="call = false" />
                    </v-col>
                  </v-row>
                </v-container>

                <!-- Education -->
                <v-container>
                  <div class="mt-3 ml-2 text-center">
                    <h4>Additional Languages Spoken</h4>
                  </div>
                  <v-row class="mt-2">
                    <v-col cols="12" md="3">
                      <label for="">Yes</label>
                      <input type="radio" v-model="form.educated" value="yes" @click="educated = true"
                        name="educated" />
                    </v-col>
                    <v-col v-if="educated" cols="12" md="3">
                      <label for="">English</label>
                      <input type="checkbox" id="english" v-model="form.education_type" value="english" />
                    </v-col>
                    <v-col v-if="educated" cols="12" md="3">
                      <label for="">French</label>
                      <input type="checkbox" name="" id="" v-model="form.education_type" value="french" />
                    </v-col>
                    <v-col v-if="educated" cols="12" md="3">
                      <label for="">Arabic</label>
                      <input type="checkbox" v-model="form.education_type" value="arabic" />
                    </v-col>
                    <v-col v-if="educated" cols="12" md="3">
                      <label for="">Other</label>
                      <input type="radio" @click="(otherEducated = true, unSelectMarried)">
                      <v-text-field v-if="otherEducated" v-model="form.education_type" label="Please specify" required>
                      </v-text-field>
                    </v-col>
                    <v-col cols="12" md="3">
                      <label for="">No</label>
                      <input type="radio" v-model="form.educated" value="no" @click="educated = false"
                        name="educated" />
                    </v-col>
                  </v-row>
                </v-container>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="">Reason for Visit</label>
                      <input type="text" class="form-control" v-model="form.reason_for_visiting">
                    </div>
                    <div class="col-lg-6">
                      <label for="">To be Seen By</label>
                      <select name="" id="" class="form-control" v-model="form.to_be_seen">
                        <option value="">Please select</option>
                        <option :value=doctor.id v-for="doctor in doctors" :key="doctor.id">{{ doctor.first_name }} {{
                            doctor.middle_name ? doctor_middle_name : ''
                        }}
                          {{ doctor.last_name }}</option>
                      </select>
                    </div>
                  </div>
                </div>
              </v-container>
              <v-footer>
                <v-container>
                  <button type="submit" class="btn btn-primary float-left">
                    <i class="fa fa-paper-plane">
                      Submit
                    </i>
                  </button>
                  <router-link to="/clients" class="btn btn-danger float-right">
                    <i class="fas fa-arrow-left">
                      Back
                    </i>
                  </router-link>

                </v-container>
              </v-footer>

            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import VueTagsInput from "@johmun/vue-tags-input";
import axios from "axios";

export default {
  components: {
    VueTagsInput,
  },
  data() {
    return {
      genders: {},
      ethnicitys: {},
      sexualOrientations: {},
      educationLevels: {},
      occupations: {},
      doctors: {},
      medicalConditions: [],
      tag: '',
      client: '',
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
        client_no: "",
        first_name: "",
        last_name: "",
        address: "",
        date_of_birth: "",
        gender: "",
        marriage: "",
        marital_status: "",
        nationality: "GAMBIAN",
        sexual_orientation: "",
        // diabetes: [],
        // diabetes_details: [],
        // hypertension: [],
        // hypertension_details: [],
        // asthma: [],
        // asthma_details: [],
        // cardiacProblems: [],
        // cardiacProblems_details: [],
        // kidneyProblems: '',
        // kidneyProblems_details: [],
        // liverProblems: '',
        // liverProblems_details: [],
        // cancer: [],
        // cancer_details: [],
        // otherMedicalHistory: [],
        // otherMedicalHistory_details: [],
        // tags: [] ,
        // medical_history: [],
        medical_history_details: "",
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
        reason_for_visiting: "",
        to_be_seen: ""
      }),
    };
  },
  methods: {
    unSelectMarried() {

    },
    onSelect({ name, iso2, dialCode }) {
      console.log(name, iso2, dialCode);
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
    loadGender() {
      axios.get('/api/gender')
        .then(({ data }) => {
          this.genders = data.data
          // console.log()
        })
        .catch((error) => {
          console.log(error);
        })
    },
    loadEthnicity() {
      axios.get('/api/ethnicity')
        .then(({ data }) => {
          this.ethnicitys = data.data
          // console.log()
        })
        .catch((error) => {
          console.log(error);
        })
    },
    loadSexualOrientation() {
      axios.get('/api/sex')
        .then(({ data }) => {
          this.sexualOrientations = data.data
          // console.log()
        })
        .catch((error) => {
          console.log(error);
        })
    },
    loadOccupation() {
      axios.get('/api/occupation')
        .then(({ data }) => {
          this.occupations = data.data
        })
        .catch((error) => {
          console.log(error)
        })
    },

    loadEducatonLevel() {
      axios.get('/api/educationLevel')
        .then(({ data }) => {
          this.educationLevels = data.data
        })
        .catch((error) => {
          console.log(error)
        })
    },

    loadDoctors() {
      axios.get('/api/doctors')
        .then(({ data }) => {
          this.doctors = data.data
        })
        .catch((error) => {
          console.log(error)
        })
    },
    loadClient() {
      axios.get('/api/getClient')
        .then(({ data }) => {
          this.form.client_no = data.data
        })
        .catch((error) => {
          console.log(error)
        })
    },
    loadMedicalConditions() {
      axios.get("/api/medicalCondition/list").then(response => {
        this.medicalConditions = response.data.data.map(a => {
          return { text: a.name, id: a.id };
        });
      }).catch(() => console.warn('Oh. Something went wrong'));
    }
  },
  created() {
    this.$Progress.start();
    this.loadGender();
    this.loadEthnicity();
    this.loadSexualOrientation();
    this.loadOccupation();
    this.loadEducatonLevel();
    this.loadDoctors();
    this.loadClient();
    this.loadMedicalConditions();
    this.$Progress.finish();
  },
  mounted() { },
  computed: {
    calAge() {
      let today = new Date();
      let d = new Date(this.form.date_of_birth)
      const m = today.getMonth() - d.getMonth();
      let age = today.getFullYear() - d.getFullYear();
      if (m < 0 || (m === 0 && today.getDate() < this.d.getDate())) {
        age = age - 1;
      }
      return age;
    },

    filters: {
      truncate: function (text, length, suffix) {
        return text.substring(0, length) + suffix;
      },
    },

    filteredItems() {
      return this.medicalConditions.filter(i => {
        return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
      });
    },
  },
};
</script>
<style scoped>
/* .centered-input input {
    text-align: center;
  } */
input[type=checkbox] {
  width: 40px;
  height: 30px;
}

input[type=radio] {
  width: 20px;
  height: 20px;
}
</style>
