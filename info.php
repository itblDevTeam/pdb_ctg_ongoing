<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update form design</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />
     

</head>
<body>
    <section class="header">
        <h1 class="title">TPGBHS</h1>

        <div class="container">
             <form action="" method="post">

                 <div class="contact-form row">
                     <div class="form-field col-lg-6">
                         <input id="name" class="input-text" type="text" name="" placeholder="Full Name" required/>
                         
                     </div>


                     <div class="form-group row">

            
                <label for="inputEmail" class="col-sm-2 col-form-label" style="display:flex; align-items:center; justify-content:center;" >Email</label>

                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>

       
                     <div class="form-group form-field" style="margin-top: 2rem;">
                        
                         <div class="input-group">
                            
                            <div class="custom-file">
                                
                                    <input type="file" style="display: block;" class="custom-file-input col-lg-12" id="image"
                                  aria-describedby="inputGroupFileAddon01"  accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                                 <label class="custom-file-label" for="image">Choose file</label>

                                 <img id="blah" class="m-4 col-lg-4" src="" alt=""/>
                                
                                

                                
                                
                              </div>
                              
                         </div>
                         
                      </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="Nick Name" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="School Name" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="School District Name" required/>
                       
                   </div>
       
                   <div class="form-group row col-lg-6">
                        <label for="">sadfasdfsadf</label>
                       <input id="name" class="input-text" type="text" name="" placeholder="SSC Pass Year" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="College Name" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="HSC Pass Year" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="Present Profession" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="Organization Name" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="Working Address" required/>
                       
                   </div>
                   <!-- extra starts  -->
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="Spouse Name" required/>
                       
                   </div>

                   <div class="form-field col-lg-6">
                    <input id="name" class="input-text" type="text" name="" placeholder="Spourse Working Place" required/>
                    
                </div>

                <div class="form-field col-lg-6">
                    <input id="name" class="input-text" type="text" name="" placeholder="Spouse Blood Group" required/>
                    
                </div>

                   <div class="form-field col-lg-6">
                    <div class="form-group">
                        <label for="baby_info"> <p class="text"> <b>No. Of Baby</b> </p> </label>
                        <select class="form-control mb-4" id="baby_info" onchange="getSelectValue();">
                            <option>Select</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <div class="baby1" id='baby1' style="display: none;">
                            <input type="text" name="name1" id="name1" placeholder="First Baby Name" />
                            <input type="text" name="age1" id="age1" placeholder="First Baby Age" />
                        </div>
                        <div class="baby2" id='baby2' style="display: none;">
                            <input type="text" name="name2" id="name2" placeholder="Second Baby Name" />
                            <input type="text" name="age2" id="age2" placeholder="Second Baby Age" />
                        </div>
                        <div class="baby3" id='baby3' style="display: none;">
                            <input type="text" name="name3" id="name3" placeholder="Third Baby Name" />
                            <input type="text" name="age3" id="age3" placeholder="Third Baby Age" />
                        </div>
                        <div class="baby4" id='baby4' style="display: none;">
                            <input type="text" name="name4" id="name4" placeholder="Fourth Baby Name" />
                            <input type="text" name="age4" id="age4" placeholder="Fourth Baby Age" />
                        </div>
                        <div class="baby5" id='baby5' style="display: none;">
                            <input type="text" name="name5" id="name5" placeholder="Fifth Baby Name" />
                            <input type="text" name="age5" id="age5" placeholder="Fifth Baby Age" />
                        </div>
                        
                    </div>
                       
                   </div>
                   <!-- extra ends  -->
       
                   <div class="form-field col-lg-6">
                       <input id="email" class="input-text" type="email" name="" placeholder="Email Address" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <!-- <input id="name" class="input-text" type="number" name="" placeholder="Phone Number"> -->
                       <input type="tel" name="telphone" placeholder="Mobile Number(01XXXXXXXXX)" pattern="[0-9]{11}"  class="input-text"  maxlength="12"  title="Eleven digits code" required/>    
             
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="Blood Group" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <!-- <input id="name" class="input-text" type="text" name="" placeholder="Emergency Phone Number" required/> -->
                       <input type="tel" name="telphone" placeholder="Emergency Mobile Number(01XXXXXXXXX)" pattern="[0-9]{11}"  class="input-text"  maxlength="12"  title="Eleven digits code" required/>
                       
                   </div>
       
                   <div class="form-field col-lg-6">
                       <input id="name" class="input-text" type="text" name="" placeholder="Invitor Friend Name" required/>
                     
                   </div>
       
                   <div class="form-field col-lg-12">
                       <input id="name" class="input-text" type="text" name="" placeholder="Advice For Group Development" required/>
                      
                   </div>
       
                   <div class="form-field col-lg-12">
                       <input class="submit-btn" type="submit" value="submit" name="">
                   </div>
                 </div>
             </form>
        </div>
    </section>
   
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>


<script>
    function getSelectValue() {
        var selectedValue = document.getElementById("baby_info").value;
        var baby1 = document.getElementById('baby1');
        var baby2 = document.getElementById('baby2');
        var baby3 = document.getElementById('baby3');
        var baby4 = document.getElementById('baby4');
        var baby5 = document.getElementById('baby5');
        // alert(selectedValue);
        console.log(selectedValue);
        
        if(selectedValue == '1')
        {
            baby1.style.display = 'block';
            baby2.style.display = 'none';
            baby3.style.display = 'none';
            baby4.style.display = 'none';
            baby5.style.display = 'none';
            
        }

        else if(selectedValue == '2')
        {
            baby1.style.display = 'block';
            baby2.style.display = 'block';
            baby3.style.display = 'none';
            baby4.style.display = 'none';
            baby5.style.display = 'none';
        }
        else if(selectedValue == '3')
        {
            baby1.style.display = 'block';
            baby2.style.display = 'block';
            baby3.style.display = 'block';
            baby4.style.display = 'none';
            baby5.style.display = 'none';
        }
        else if(selectedValue == '4')
        {
            baby1.style.display = 'block';
            baby2.style.display = 'block';
            baby3.style.display = 'block';
            baby4.style.display = 'block';
            baby5.style.display = 'none';
        }
        else if(selectedValue == '5')
        {
            baby1.style.display = 'block';
            baby2.style.display = 'block';
            baby3.style.display = 'block';
            baby4.style.display = 'block';
            baby5.style.display = 'block';
        }
       
 
        

        // document.getElementById('tbl').style.display = 'block';
    }
    // console.log(num.selectedValue);
</script>

</body>
</html>