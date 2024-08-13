<main id="main" class="main">

    <div class="pagetitle">
    
      <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard') ?>">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah kue</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_t_kue') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">nama kue</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kue">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">stok</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok">
                  </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">harga</label>
                  <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga">
                 
                   
                 </select> 
                  </div>
                </div>
                
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

         