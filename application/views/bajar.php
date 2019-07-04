<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="example-wrap">
                <h4 class="example-title">Nosotros/About <?=@$oneabout->abo_id?></h4>
                <div class="example">
                  <form id="formcreate" autocomplete="off">
                    <div class="row">
                     
                  
                    <div class="row">
                      <div class="form-group col-md-12">
                          <label class="form-control-label" >History / Historia </label>
                          <textarea class="form-control" id="inp_history" name="inp_history" rows="10" ><?=@$oneabout->abo_history ?></textarea>
                        </div>
                    </div>

                    
                    <div class="row">
                      
                      <div class="col-md-4">
                        <a class="btn btn-outline btn-primary btn-sm" href="<?=$url?>about/">Lista</a>
                      </div>

                      <div class="col-md-4 text-right">
                        
                      </div>

                      <div class="col-md-4 text-right">
                        <div class="form-group">
                      
                          <input type="hidden" name="url" id="url" value="<?=$url?>">
                          <input type="hidden" name="aboid" id="aboid" value="<?=@$oneabout->abo_id ?>">
                          <img id="waitLoading" height="35px" src="<?=base_url()?>application/assets/images/progress.svg" style="display: none">
                          <button id="btnguardar" type="button" class="btn btn-primary btn-sm" style="display: none" >Guardar</button>
                          <button id="btneditar" type="button" class="btn btn-primary btn-sm" style="display:none" >Guardar</button>
                        
                          <script type="text/javascript">
                          var id=$("#aboid").val();
                          if(id==0){
                            $("#btnguardar").show();
                          }else{
                            $("#btneditar").show();                        
                          }

                          </script>
                        </div>

                      </div>

                      

                    </div>

                    
                    
                  </form>
                </div>
              </div>


</body>
</html>