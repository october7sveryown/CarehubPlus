<?php 
 
$this->load->view('user/header');
?>
 
<div class="app-content content container-fluid">
     
 
    <div class="content-wrapper">
 
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title"><?php echo $patients[0]['patient_name']; ?></h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                 
                <li class="breadcrumb-item active">View Patient Profile
                </li>
              </ol>
            </div>
          </div>
        </div>
       
    <!-- Justified With Top Border start -->
<section id="justified-top-border">
     
    <div class="row match-height">
        <div class="col-xs-12">
            <div class="card">
                 
                <div class="card-body">
                    <div class="card-block">
                         
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" aria-controls="active" aria-expanded="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="link-tab" data-toggle="tab" href="#link" aria-controls="link" aria-expanded="false">Reports</a>
                            </li>
                        </ul>
                        <div class="tab-content px-1 pt-1">
                            <div role="tabpanel" class="tab-pane fade active in" id="active" aria-labelledby="active-tab" aria-expanded="true">
                                <div class="table-responsive">
                        <table class="table">
                             
                            <tbody>
                                <tr>
                                    <th scope="row">Patient Name</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_name']; ?></td>
                                     
                                </tr>
                                <tr>
                                    <th scope="row">Contact no.</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_phone']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Blood Group</th>
                                    <td colspan="3"><?php echo $patients[0]['Patient_bloodgroup']; ?></td>
                                </tr>
                             
                                <tr>
                                    <th scope="row">E-mail</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_email']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_address']; ?></td>
                                </tr>
                                   <tr>
                                    <th scope="row">Patient ID</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_unique_id']; ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Area Code</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_areacode']; ?></td>
                                </tr>
                                  <tr>
                                    <th scope="row">Patient Age</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_age']; ?></td>
                                </tr>


                                <tr>
                                    <th scope="row">Generated by Staff Name</th>
                                    <td colspan="3"><?php echo $patients[0]['staff_name']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td colspan="3"><?php if($patients[0]['patient_gender']=="1"){ echo "Male"; }
                                        if($patients[0]['patient_gender']=="2"){ echo "Fe-male"; }
                                        if($patients[0]['patient_gender']=="0"){ echo "Other"; }
                                     ?></td>
                                </tr>

                                 <tr>
                                    <th scope="row">Occupation</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_occupation']; ?></td>
                                </tr>

                                 <tr>
                                    <th scope="row">Caste</th>
                                    <td colspan="3"><?php echo $patients[0]['patient_cast']; 
                                     ?></td>
                                </tr>
                            </tbody>
                        </table>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
                            <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <h4 class="card-title">Body Reports</h4>
                        <p class="card-text">Find all Body reports of patient.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <?php for ($i=0; $i < count($patients_reports) ; $i++) { 
                     ?>
                        <li class="list-group-item">
                            <a  href=" <?php echo site_url('uploadpdf').'/'.$patients_reports[$i]['report_name_url']; ?>" class="float-xs-right"><i class="icon-download4"></i></a>
                            <?php echo $patients_reports[$i]['create_on']; ?>
                        </li>
                        <?php } ?>
                       
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <h4 class="card-title">Patient Reports</h4>
                        <p class="card-text">Find all Patient Reports.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <?php for ($i=0; $i < count($patients_reports) ; $i++) { 
                     ?>
                        <li class="list-group-item">

                            <a  href=" <?php echo site_url('Patient/uploadpdf').'/'.$patients[$i]['patient_id'].'/'.$patients_reports[$i]['report_id']; ?>" class="float-xs-right" ><i class="icon-download4"></i></a>
                            <?php echo $patients_reports[$i]['create_on']; ?>
                        </li>
                        <?php } ?>
                       
                    </ul>
                </div>
            </div>
        </div>
            </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Justified With Top Border end -->
 
 
 
 
 
    </div>
 
 
 
 
 
 
</div>
 
<?php 
 
$this->load->view('user/footer');
?>