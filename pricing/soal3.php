
<?php include 'templates/header.php'; ?>

<?php include 'templates/navbar.php'; ?>


<!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Psikotes Online</h1>
  <p class="lead">Selamat datang di sistem psikotes online dari Arwana Citramulia Tbk .</p>
</div> -->

<!-- <div class="container"> -->
  <!-- nomor pagination -->
  <!-- <div class="row"> -->
    <!-- col-ke-1 -->
    <!-- <div class="col-md-3">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option2" autocomplete="off"> Radio
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option3" autocomplete="off"> Radio
        </label>
      </div>
    </div> -->
    <!-- col ke 2 -->
    <!-- <div class="col-md-9">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option2" autocomplete="off"> Radio
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option3" autocomplete="off"> Radio
        </label>
      </div>
    </div> -->
  <!-- </div> -->
  <div class="card-deck  px-3 py-3 pt-md-5 pb-md-4 mx-auto">
    <!-- timer -->
     <div class="col-md-3">
       <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Timer (Sisa Waktu)</h4>
        </div>
        <div class="card-body">
          <div class="panel-body">
            <div align="left" style="padding-left: 5px; padding-right:1px;">
              <div id='timer'></div>
            </div>      
          </div>
          <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
          <!-- <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul> -->
          <!-- <center><button type="button" class="btn btn-md btn-primary text-center">Setuju dan Lanjutkan</button></center> -->
        </div>
      </div>
    </div>
     <!-- soal -->
    <div class="col-md-9">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal text-center">Sub Test 3 ( Tes Deret Angka )</h4>
        </div>
        <div class="card-body">
          <form action="hasil_la_mp.php" id="frmSoal" method='POST' > 
            <div style="padding-left: 30px; padding-right:30px;">
              <div class="tab-content">
                <?php
                  // // include '../koneksi.php'; 
                  // include '../config/koneksi.php';                    
                  // // $query = "SELECT * FROM tbsoal limit 5";
                  // $query = "SELECT * FROM soal3 order by id ASC";
                  // $hasil = mysqli_query($connect, $query);
                  // $nomor = 1;
                  // while($row = mysqli_fetch_array($hasil)){
                  // $id   = $row["id"];
                  // $soal      = $row["soal"];
                  // $pilihan_a = $row["A"];
                  // $pilihan_b = $row["B"];
                  // $pilihan_c = $row["C"];
                  // $pilihan_d = $row["D"];                     
                ?>
                  <div >
                    <div class="col-md-12 ">

                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">1.</h1>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-2 text-center"><button type="button" class="btn btn-success">2</button></div>
                              <div class="col-md-2 text-center"><button type="button" class="btn btn-success">3</button></div>
                              <div class="col-md-2 text-center"><button type="button" class="btn btn-success">4</button></div>
                              <div class="col-md-2 text-center"><button type="button" class="btn btn-success">5</button></div>
                              <div class="col-md-2 text-center"><button type="button" class="btn btn-success">6</button></div>
                              <div class="col-md-2 text-center"><button type="button" class="btn btn-success">7</button></div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb1_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb1_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>

                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">2.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">20</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">22</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">24</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">26</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">28</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">30</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb2_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb2_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>

                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">3.</h1>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">30</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">27</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">24</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">21</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">19</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">16</button></div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb3_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb3_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                      
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">4.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">7</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">14</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">28</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">46</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">92</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">184</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb4_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb4_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">5.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">7</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">12</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">9</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">14</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">11</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">16</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb5_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb5_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">6.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">4</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">9</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">16</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">23</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">31</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">40</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb6_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb6_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">7.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">9</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">18</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">11</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">20</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">13</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">21</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb7_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb7_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">8.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">64</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">32</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">16</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">8</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">4</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">2</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb8_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb8_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">9.</h1>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">69</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">61</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">52</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">42</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">31</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">19</button></div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb9_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb9_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">10.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">22</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">27</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">108</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">113</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">452</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">457</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb10_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb10_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">11.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">25</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">50</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">100</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">200</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">400</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">800</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb11_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb11_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">12.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">9</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">6</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">12</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">9</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">18</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">15</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb12_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb12_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">13.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">6096</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">3048</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1524</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">762</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">381</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">192.5</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb13_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb13_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">14.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">30</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">10</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">40</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">8</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">50</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">6</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb14_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb14_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">15.</h1>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">17</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">18</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">22</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">14</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">28</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">11</button></div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb15_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb15_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">16.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">64</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">60</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">55</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">49</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">42</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">34</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb16_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb16_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">17.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">21</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">10</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">22</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">11</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">23</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">12</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb17_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb17_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">18.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2"><button type="button" class="btn btn-success">10000</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">10</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1000</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">100</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">0.1</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb18_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb18_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">19.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">5</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">20</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">10</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">40</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">20</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">80</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb19_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb19_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">20.</h1>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">18</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">9</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">10</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">5</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">6</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">3</button></div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb20_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb20_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">21.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-3</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-6</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-9</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-15</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-24</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-39</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb21_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb21_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">22.</h1>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">2</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">5</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">12</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">9</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">22</button></div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb22_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb22_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">23.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1/2</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1/2</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1/4</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1/12</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1/48</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">1/240</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb23_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb23_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">24.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">0</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">15</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-15</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">30</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-30</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">45</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb24_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb24_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead text-center pt-2">25.</h1>
                          </div>
                          <div class="col-md-6">
                             <div class="row">
                               <div class="col-md-2 text-center"><button type="button" class="btn btn-success">24</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">30</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">18</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">42</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">-6</button></div>
                             <div class="col-md-2 text-center"><button type="button" class="btn btn-success">90</button></div>
                             </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb25_1" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="jwb25_2" value="" class="form-control"  placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                      
                      </table></br>
                    </div>
                  </div>

                  <!-- <div >
                    <div class="col-md-12 ">

                        <div class="row">
                          <div class="align-text-center col-md-1">
                            <input type="hidden" name="id[]" value="<?php echo $id; ?>">
                            <h1 class="lead"><?php echo $nomor; ?>. &nbsp;&nbsp;</h1>
                          </div>
                          <div class="col-md-4">
                           
                            <h1 class="lead"><?php echo $soal; ?></h1>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                            
                              <input type="text" name="pilihan[<?php echo $id;?>]" value="" class="form-control"  placeholder="Angka 1, Angka 2">
                            </div>
                          </div>
                        
                        </div>
                      
                      
                      </table></br>
                    </div>
                  </div> -->
                 <!-- akhir card -->
                
              </div>
            </div>
          </form>   
        
          <div class="float-right mr-md-5 mb-3">
            <!-- <button type="button" class="btn btn-md btn-primary text-center">Next</button> -->
          </div>
          <!-- <center><button type="button" class="btn btn-md btn-primary text-center">Lanjutkan</button></center> -->
        </div>
      </div>
    </div>

    <!-- <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div> -->
    <!-- <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div> -->
  </div>

<?php include 'templates/footer.php'; ?>

<!-- Script Wizard -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('#rootwizard').find('.bar').css({width:$percent+'%'});
      }});
      $('#rootwizard .finish').click(function() {
        
        $('#rootwizard').find("a[href*='tab1']").trigger('click');
      });
    });

    </script>

    <!-- Script Timer -->
       <script type="text/javascript">
          $(document).ready(function() {
               /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik;
                * var menit;
                * var jam;
              */
              var detik   = <?= $detik; ?>;
              var menit   = <?= $menit; ?>;
              var jam     = <?= $jam; ?>;
                
               /**
                 * Membuat function hitung() sebagai Penghitungan Waktu
               */
              function hitung() {
                  /** setTimout(hitung, 1000) digunakan untuk 
                      * mengulang atau merefresh halaman selama 1000 (1 detik) 
                  */
                  setTimeout(hitung,1000);
    
                 /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                 if(menit < 5 && jam == 0){
                       var peringatan = 'style="color:red"';
                 };
   
                 /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                 $('#timer').html(
                        '<h4 align="center"'+peringatan+'>Sisa waktu anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h4><hr>'
                  );
    
                  /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                  detik --;
   
                  /** Jika var detik < 0
                      * var detik akan dikembalikan ke 59
                      * Menit akan Berkurang 1
                  */
                  if(detik < 0) {
                      detik = 59;
                      menit --;
   
                      /** Jika menit < 0
                          * Maka menit akan dikembali ke 59
                          * Jam akan Berkurang 1
                      */
                      if(menit < 0) {
                          menit = 59;
                          jam --;
   
                          /** Jika var jam < 0
                              * clearInterval() Memberhentikan Interval dan submit secara otomatis
                          */
                          if(jam < 0) {
                             clearInterval(); 
                             /** Variable yang digunakan untuk submit secara otomatis di Form */
                             var frmSoal = document.getElementById("frmSoal"); 
                             alert('Maaf, Waktu pengerjaan untuk soal subtest ketiga ini telah habis, lanjut ke subtest berikutnya.'), window.location = 'mulaisoal4.php'; 
                        }
                      } 
                  } 
              }           
              /** Menjalankan Function Hitung Waktu Mundur */
              hitung();
        }); 
        // ]]>
      </script>

</body>
</html>