<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta charset="utf-8">
		<style type="text/css">
			html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, sup, var, a, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, input, textarea, button, table, caption, tbody, tfoot, thead, tr, th, td {
				 background: none repeat scroll 0% 0% transparent;
				 border: 0pt none;
				 font-size: 100%;
				 list-style: none outside none;
				 margin: 0pt;
				 outline: 0pt none;
				 padding: 0pt;
				 vertical-align: baseline;
			}

			body {
				 background: url(images/background.jpg)  no-repeat top center;
				 font-size: 12px;
				 font-family:Arial, Helvetica, sans-serif;
				 font-size:14px;
			}

			#main {
				 margin: 10px auto auto;
				 width: 550px;
			}

			form {
				 margin-bottom: 10px;
			}

			.input {
				 display: none;
			}

			.label {
				 background-color: #232323;
				 text-transform: uppercase;
				 border-bottom: 1px solid #2B2B2B;
				 color: white;
				 cursor: pointer;
				 display: block;
				 font-family: calibri;
				 font-size: 14px;
				 letter-spacing: 2px;
				 padding: 8px 10px;
				 position: relative;
				 text-shadow: 0pt 1px 0pt rgba(0, 0, 0, 0.6);
				 -moz-transition:background-color 0.3s ease;
				 -webkit-transition:background-color 0.3s ease;
				 -o-transition:background-color 0.3s ease;
				 transition:background-color 0.3s ease;
			}

			.label:before{
				content:"";
				position:absolute;
				right:10px;
				top:13px;
				width:0;
				height:0;
				border:4px solid transparent;
				border-top:5px solid white;
			}

			.content {
				 background-color: #FFFFFF;
				 height: 0pt;
				 opacity: 0;
				 -moz-transition: opacity 0.5s ease;
				 -o-transition: opacity 0.5s ease;
				 -webkit-transition: opacity 0.5s ease;
				 transition: opacity 0.5s ease;
			}

			.content p {
				 color: #C3F;
				 font-family: helvetica,sans-serif;
				 font-size: 14px;
				 line-height: 20px;
				 padding: 8px;
			}

			.label:hover {
				 background-color: #0088BB;
				 border-color: transparent;
			}

			.input:checked ~ .content {
				 height: auto;
				 opacity: 1;

			}

			.input:checked ~ label {
				 background-color: #0088BB;
				 border-color: transparent;
			}

			.input:checked ~ label:before{
				border-bottom:5px solid white;
				border-top:none;
			}	
		</style>
	</head>
		
	<body>
		<div id="main">
			<form><!--kiểu radio-->
				<section>
					<input type="radio" name="form2" id="h5" checked class="input">
					<label for="h5" class="label">quy định chung</label>
					<div class="content">
						<p> QUY ĐỊNH CỦA NHÀ TRƯỜNG</p>
						<p align="justify"> 1. Tất   cả học sinh cấp trung học cơ sở  đều được cấp tài khoản vào mỗi đầu năm học dùng để đăng nhập vào hệ thống website thi trắc nghiệm của trường.<br />
						  2. Chỉ   những học sinh đăng ký với các thông tin chính xác : Họ và tên, ngày   sinh, lớp, trường, huyện (quận, thị xã, thành phố thuộc tỉnh), tỉnh   (thành phố trực thuộc trung ương) được Ban tổ chức cấp trường xác nhận   mới được trao các giải thưởng của cuộc thi.<br />
						  3. Các đối tượng không dự thi chính thức vẫn được xếp hạng trên website nhưng không được trao thưởng.<br />
						  4. Các thành viên cần tự rèn luyện thông qua cuộc thi và không được thiếu trung thực khi thi.<br />
						  5. Các thành viên chấp hành Thể lệ của cuộc thi và mọi thông báo từ Ban tổ chức cấp quốc gia được công bố trên website.<br />
						  6. Các thành viên tham gia thi trên trang website phải có kế hoạch học   tập và tu dưỡng toàn diện, không để việc tham gia thi ảnh hưởng tới mọi   mặt hoạt động khác trong nhà trường.<br />
					  7. Thành viên quên Tên đăng   nhập hoặc Mật khẩu thì phải đăng kí thành viên lại và thi lại tất cả các   vòng thi hiện có. Ban tổ chức không hỗ trợ việc tìm lại Tên truy cập   hay Mật khẩu.</p>
                    </div>
				</section>
				<section>
					<input type="radio" name="form2" id="h6" class="input">
					<label for="h6" class="label">hướng dẫn đăng nhập</label>
					<div class="content">
						<div id="Accordion2Content">
						  <table cellpadding="0" cellspacing="0">
						    <tbody>
						      <tr>
						        <td><p><span id="Span2">Khi đã được cấp tài khoản để đăng nhập vào hệ thống website. Để tham   gia thi  bạn cần phải đăng nhập vào hệ   thống.
                                </br>
                                Bạn hãy điền tên đăng nhập,Mật khẩu vào phần ô Tên đăng nhập, Mật khẩu như hình trên. Sau đó bạn ấn chuột vào hoặc bạn gỗ phím Enter để đăng nhập
                                </span></p></td>
					          </tr>
					        </tbody>
					      </table>
					  </div>
					</div>
				</section>
				<section>
					<input type="radio" name="form2" id="h7" class="input">
					<label for="h7" class="label">hướng dẫn thi</label>
					<div class="content">
						<p>Sau khi bạn đăng nhập bạn click vào chữ "VÀO THI" khi đó màn hình sẽ hiển thị bảng thông tin về câu hỏi, đề thi và thời gian làm bài thi.
                        </p>
					</div>
				</section>
				<section>
					<input type="radio" name="form2" id="h8" class="input">
					<label for="h8" class="label">trợ giúp khi cần thiết</label>
					<div class="content">
						<p>Học sinh nào đăng nhập không được, hoặc gặp bất kỳ sự cố gì trong quá trình làm bài, thì phải liên hệ với giáo viên phòng máy để được trợ giúp kịp thời, để kịp làm bài và hoàn thành bài thi !</p>
						<p>Chúc các em làm bài tốt !</p>
						<p>Ban quản trị website.</p>
                      	<p> <a href="#page"> Email: hvanhieu.qb@gmail.com * skye:vanhieuqb * mobile : 0935 844 689</a></p>
                        </p>
                        <p>website sử dụng tốt nhất bằng trình duyệt Google Chrome và Firefox</p>
					</div>
				</section>
			</form>
		</div><!--end main-->
	</body>
</html>
