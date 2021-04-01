@include('indexheader')
      <section class="center_wrap">
	<div class="container center_content">
		<div class="row">
			<div class="col-lg-12">
				<div class="stock_filter">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-xs-12">
							<h1 class="stocklist_title">Contact Us</h1>
						</div>
					</div>   
				</div>   
			</div>

		
@if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('error') }}</li>
        </ul>
    </div>
@endif
    <div class="border">
        <form id="form" action="" method="POST"  enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="h1">My Form</div>
            <div class="form_center">
                <table class="tbl">
                    <tr>
                        <td><label class="fld-lab">Name:</label> </td>
                        <td><input type="text" name="name" id="fname"  required="" maxlength="50" class="fld-txt" />
                            <p id="fname_error"></p>
                        </td>
                    </tr>
                

                    <tr>
                        <td><label class="fld-lab">Email:</label> </td>
                        <td><input type="email" name="email" id="email"  class="fld-txt" />
                        <p id="email_error"></p>
                        </td>
                    </tr>
					<tr>
                        <td><label class="fld-lab">Mobile Number:</label> </td>
                        <td><input type="phone" name="number" id="number"  class="fld-txt" maxlength=10/>
                        <p id="email_error"></p>
                        </td>
                    </tr>
                 
					<tr>
                        <td><label class="fld-lab">Message us:</label> </td>
                        <td><input type="text" name="message" id="message"  class="fld-txt" />
                        <p id="email_error"></p>
                        </td>
                    </tr>
             <tr>
                        <td colspan="2" style="text-align: center;" ><input type="submit" id="submit" value="REGISTER" class="btn" /></td>
                    </tr>
                </table>
        </form>
    </div>
    </div>
		</div>
	</div>
</section>
@include('indexfooter')