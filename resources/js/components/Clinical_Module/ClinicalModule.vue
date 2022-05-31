<template>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h1>Welcome to the clinical module template</h1>
      </div>
      <div class="card-body">
        <div class="row ">
          <div class="col-12 col-sm-6 col-md-3" @click="fetchRecord('generalOpd')">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">General OPD</span>
                <!-- <span class="info-box-number">
                  10
                  <small>%</small>
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-flask"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lab Test Request</span>
                <!-- <span class="info-box-number"><i class=""></i></span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pregnancy Test & Advice</span>
                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"></span>

              <div class="info-box-content">
                <span class="info-box-text">Anter Natal Care</span>
                <!-- <span class="info-box-number">2,000</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row ">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">General OPD</span>
                <!-- <span class="info-box-number">
                  10
                  <small>%</small>
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-flask"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lab Test Request</span>
                <!-- <span class="info-box-number"><i class=""></i></span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pregnancy Test & Advice</span>
                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"></span>

              <div class="info-box-content">
                <span class="info-box-text">Anter Natal Care</span>
                <!-- <span class="info-box-number">2,000</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->







        <div class="row ">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">General OPD</span>
                <!-- <span class="info-box-number">
                  10
                  <small>%</small>
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-flask"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lab Test Request</span>
                <!-- <span class="info-box-number"><i class=""></i></span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pregnancy Test & Advice</span>
                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"></span>

              <div class="info-box-content">
                <span class="info-box-text">Anter Natal Care</span>
                <!-- <span class="info-box-number">2,000</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row ">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">General OPD</span>
                <!-- <span class="info-box-number">
                  10
                  <small>%</small>
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-flask"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lab Test Request</span>
                <!-- <span class="info-box-number"><i class=""></i></span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pregnancy Test & Advice</span>
                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"></span>

              <div class="info-box-content">
                <span class="info-box-text">Anter Natal Care</span>
                <!-- <span class="info-box-number">2,000</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row ">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">General OPD</span>
                <!-- <span class="info-box-number">
                  10
                  <small>%</small>
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-flask"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lab Test Request</span>
                <!-- <span class="info-box-number"><i class=""></i></span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pregnancy Test & Advice</span>
                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"></span>

              <div class="info-box-content">
                <span class="info-box-text">Anter Natal Care</span>
                <!-- <span class="info-box-number">2,000</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="mt-4">
          <h3 class="text-center text-blue">Patients History</h3>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Allergies</th>
                  <th>BP</th>
                  <th>Temperature</th>
                  <th>BM_MMOL</th>
                </tr>
              </thead>
              <tbody>
                <tr v-if="patients == null">
                  <td rowspan="6"><h4 class="text-center">No Data available</h4></td>
                </tr>
                <!-- <h4></h4> -->
                <tr v-for="patient in patients" :key="patient.id">
                  <!-- <td rowspan="6" v-if="patients.length > 0"><h4>NO data available</h4></td> -->
                  <td>{{patient.id}}</td>
                  <td>{{patient.first_name}} {{patient.middle_name ? patient.middle_name : ''}} {{patient.last_name}}</td>
                  <td>{{patient.general_o_p_d[0].allergies}}</td>
                  <td>{{patient.general_o_p_d[0].bp}}</td>
                  <td>{{patient.general_o_p_d[0].tempera}}</td>
                  <td>{{patient.general_o_p_d[0].bm_mmol}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>

</template>

<script>
export default {
data(){
  return {
    patients: {},
  }
},
methods: {
  fetchRecord(type) {
    axios.get(`api/${type}`).then(({ data }) => {
      this.patients = data.data;
      // console.log(data.data[0].first_name)
    }).catch(({ err }) =>{
      console.log(({ err }))
    })
  }
}
}
</script>

<style>
</style>