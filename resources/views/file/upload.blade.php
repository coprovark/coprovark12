<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>



@if(count($edit) == 0 )
    <form action="/upload1" method="post" enctype="multipart/form-data">
        <center><h3>บันทึกรูปภาพ</h3></center>        
        <input type="text" name="uploadfilename" class="form-control"><br>
        <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"><br>
        <center>
            <img id="view" src="" style="width: 120px;" />
        </center>
        <br><br>
        <input type="submit" value="upload" class="btn btn-primary btn-block">
    </form>
@elseif(count($edit) > 0 )
    @foreach($edit as $row)
    <form action="/update1" method="post" enctype="multipart/form-data">
        <center><h3>บันทึกรูปภาพ</h3></center>
        <input type="hidden" name="ID" value="{{$row->ID}}">
        <input type="text" name="uploadfilename" class="form-control" value="{{$row->FileName}}"><br>
        <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"><br>
        <center>
            <img id="view" src="{{asset('upload/'.$row->FilePath)}}" style="width: 120px;" />
        </center>
        <br><br>
        <input type="submit" value="upload" class="btn btn-primary btn-block">
    </form>
    @endforeach
@endif
<br><br>
<center>
<table border="1" width="40%">
    <thead>
        <tr>
            <th><input type="checkbox" id="itemall"></th>
            <th>#</th>
            <th>ชื่อไฟล์</th>
            <th>ประเภทไฟล์</th>
            <th>ขนาด</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
    @foreach($datatable as $row)
        <tr>
            <th><input type="checkbox" class="item" value="{{ $row->ID }}"></th>
            <td>
                @if($row->FileType == 'jpeg' || $row->FileType == 'png')
                    <!-- <img src="upload/{{ $row->FilePath }}" width="60px"> -->
                    <img src="{{ asset('upload/'.$row->FilePath) }}" width="60px">                    
                @endif
            </td>
            <td>{{ $row->FileName }}</td>
            <td>{{ $row->FileType }}</td>
            <td>{{ $row->FileSize }}</td>
            <td>
                <a href="dl/{{$row->FilePath}}/{{ $row->FileName }}.{{ $row->FileType }}" target="new">Download</a>
                <a href="rm/{{$row->ID}}" >Delete</a>
                <a href="{{url('ed/'.$row->ID)}}" >Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<br><br>
<button class="btn btn-primary" onclick="getID()">DELETE ON SELECT</button>
</center>
<br><br><br>

<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                if(input.files[0].type == 'image/jpeg' || input.files[0].type == 'image/png'){
                    $('#view').attr('src', e.target.result);
                }else{
                    alert('รูปแบบไฟล์ไม่ถูกต้อง');
                    $('#pathphoto').val('');
                    $('#view').attr('src', 'images/icon_blank.png');
                   
                }
            }
            reader.readAsDataURL(input.files[0]);

        }
    }

    $("#pathphoto").change(function() {
        readURL(this);
    });

</script>

<script>
$('#itemall').click(function(){
			if($('#itemall').is(':checked')){
				$(".item").prop('checked', true);
			}else{
				$(".item").prop('checked', false);
			}
		});

        function getID(){
		var final = [];
		$('.item:checked').each(function(){        
		var values = $(this).val();
		final.push(values);
		});
        console.log(final);
       			//send data to server
			$.ajax({
				url: 'api/delete',
				type: 'POST',
				dataType: 'json',
				data: {param: final},
			})
			.done(function(res) {
				location.reload();
                console.log(res);
			});
        }
        
</script>