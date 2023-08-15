
        

<div class="col-md-6" style="margin-left:100px;background-color:grey;width:800px;height:800px;border-color:black;border-radius:1px;">
 <br><br> <h2 class="txt_b"style="padding-left:130px;font-size:30px;color:white;" ><span>Requestor Details</span></h2>                 
<table style=" font-size:20px;color:seashell" width="500px" border="0" align="center" cellpadding="7" cellspacing="7" style="margin-top:60px;">
 
  <tr>
    <td width="54%" height="20"><strong>Contact Name: </strong></td>
     <td width="54%" height="20"><strong> {{ $editrequest->contactname }}  </strong></td>
  </tr><br><br>
 <tr>
    <td width="54%" height="20"><strong>Hospital Address:</strong></td>
     <td width="54%" height="20"><strong> {{ $editrequest->hospitaladdress }}</strong></td>
  </tr><tr>
    <td width="54%" height="20"><strong>City: </strong></td>
     <td width="54%" height="20"><strong>{{$editrequest->city}}</strong></td>
  </tr><tr>
    <td width="54%" height="20"><strong>Patient Name:</strong></td>
     <td width="54%" height="20"><strong>{{ $editrequest->patientname }}</strong></td>
  </tr><tr>
    <td width="54%" height="20"><strong>Mobile No: </strong></td>
     <td width="54%" height="20"><strong>{{ $editrequest->contactnumber }}</strong></td>
  </tr><tr>
    <td width="54%" height="20"><strong>Amount: </strong></td>
     <td width="54%" height="20"><strong>{{ $editrequest->amount }}</strong></td>
  </tr>
  <tr>
    <td width="54%" height="20"><strong>Blood-Group:</strong></td>
     <td width="54%" height="20"><strong>{{ $editrequest->blood }}</strong></td>
  </tr>
  <tr>
    <td width="54%" height="20"><strong>Required:</strong></td>
     <td width="54%" height="20"><strong>{{$editrequest->required}}</strong></td>
  </tr>

</table> </div>


           
               
                
            
    
