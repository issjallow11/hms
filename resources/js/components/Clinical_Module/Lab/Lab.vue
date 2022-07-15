<template>
  <div class="container-fluid">
    <div class="card">
      <!-- Header -->
      <div class="card-header bg-blue">
        <h1 class="text-center">Lab Request</h1>
      </div>
      <!-- form -->
      <form action="">
        <!-- body -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID:</th>
                <th>ID:</th>
                <th>ID:</th>
                <th>ID:</th>
                <th>ID:</th>
                <th>ID:</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>
                  <a href="#">
                    <button>
                      <i class="fas fa-edit"></i>
                    </button>
                  </a>
                  /
                  <a href="#">
                    <button>
                      <i class="fas fa-trash"></i>
                    </button>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Footer -->
        <!-- <div class="card-footer">
          <button type="submit" class="btn btn-primary ">
            <i class="fa fa-paper-plane">submit</i>
          </button>
          <router-link to="/visitors" class="text-white float-right">
            <button class="btn btn-danger">
              Back
            </button>
          </router-link>
        </div> -->
      </form>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
</style>