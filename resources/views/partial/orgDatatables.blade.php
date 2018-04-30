        <div class="col-sm-12 text-center display-5">บันทึกข้อมูลศูนย์จัดการดินปุ๋ยชุมชน</div>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-addOrg-modal-lg">เพิ่มศูนย์</button>
        <!-- Modal -->
        <div class="modal fade bd-addOrg-modal-lg" id="myLargeModalLabel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel"><strong> เพิ่มข้อมูลศูนย์จัดการดินปุ๋ยชุมชน</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <table>
                            <tr><td width="25%">1. ชื่อศูนย์จัดการดินปุ๋ยชุมชน</td><td colspan="4"><input type="text" class="form-control" id="name" placeholder="กรอกชื่อศูนย์จัดการดินปุ๋ยชุมชน"></td></tr>
                            <tr><td width="25%">2. ที่อยู่ศูนย์จัดการดินปุ๋ยชุมชน</td><td><label for="provinces" class="control-label">จังหวัด</label>
                                <select id="province" class="custom-select">
                                    <option selected>กรุณาเลือกจังหวัด...</option>
                                    @foreach($province as $v)
                                        <option value="{{ $v->province_id }}">{{ $v->province_name }}</option>
                                    @endforeach
                                </select>
                                </td><td>
                                <label for="amphurs" class="control-label">อำเภอ</label>
                                <select id="amphur" class="custom-select">
                                    <option selected>กรุณาเลือกอำเภอ...</option>
                                </select>
                                </td><td>
                                <label for="tambons" class="control-label">ตำบล</label>
                                <select id="tambon" class="custom-select">
                                    <option selected>กรุณาเลือกตำบล...</option>
                                </select>
                                </td><td>
                                    <label for="moos" class="control-label">หมู่ที่</label>
                                    <input type='text' class="form-control" id="moo" placeholder="กรอกหมู่ที่">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%">3. พิกัดที่ตั้ง ศดปช.</td>
                                <td><input type="text"  id="zone" placeholder="ZONE"></td>
                                <td><input type="text"  id="x" placeholder="พิกัด X"></td>
                                <td><input type="text"  id="y" placeholder="พิกัด Y"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="25%">4. พืชหลัก (เลือกได้ 1 ชนิดพืช)</td>
                                <td><label for="plants" class="control-label">กลุ่มพืช</label>
                                    <select id="group_plant" class="custom-select">
                                        <option selected>กรุณาเลือกกลุ่มพืช...</option>
                                        @foreach($groupPlant as $v)
                                            <option value="{{ $v->type_code }}">{{ $v->type_name }}</option>
                                        @endforeach
                                    </select></td>
                                <td><label for="plants" class="control-label">ชนิดพืช</label>
                                    <select id="plantname" class="custom-select">
                                        <option selected>กรุณาเลือกชนิดพืช...</option>
                                    </select></td>
                                <td><label for="plants" class="control-label">พันธุ์พืช</label>
                                    <select id="plantname" class="custom-select">
                                        <option selected>กรุณาเลือกพันธุ์พืช...</option>
                                    </select></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="25%">5. ปี พ.ศ. ที่จัดตั้ง ศดปช.</td>
                                <td><div id="establish_year"></div></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="25%">6. ระดับ ศดปช. ปี 2559</td>
                                <td><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="A+">
                                    <label class="control-label">A+</label></td>
                                <td><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="A">
                                    <label class="control-label">A</label></td>
                                <td><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="B">
                                    <label class="control-label">B</label></td>
                                <td><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="C">
                                    <label class="control-label">C</label></td>
                            </tr>
                            <tr>
                                <td width="25%">7. ระดับ ศดปช. ปี 2560</td>
                                <td><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="A+">
                                    <label class="control-label">A+</label></td>
                                <td><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="A">
                                    <label class="control-label">A</label></td>
                                <td><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="B">
                                    <label class="control-label">B</label></td>
                                <td> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="C">
                                    <label class="control-label">C</label></td>
                            </tr>
                        </table>





                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
            </div>
        </div>

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr align="center">
                <th>ลำดับที่</th>
                <th>ชื่อศูนย์จัดการดินปุ๋ยชุมชน</th>
                <th>ที่ตั้งศูนย์จัดการดินปุ๋ยชุมชน</th>
                <th>พืชหลัก</th>
                <th>ปีที่จัดตั้ง ศดปช.</th>
                <th>จัดการข้อมูล</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td align="center">1</td>
                <td>ศดปช. อำเภอชนแดน</td>
                <td>หมู่ 5 บ้านโคกสาร ต.ซับพุทรา อ.ชนแดน จ.เพชรบูรณ์</td>
                <td>ข้าวโพดเลี้ยงสัตว์</td>
                <td>2559</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-addClassfertilizer-modal-lg">ระดับ ศดปช.</button> | <button type="button" class="btn btn-danger">ลบข้อมูล</button> | <button type="button" class="btn btn-warning">แก้ไข</button></td>
            </tr>
            </tfoot>
        </table>

        <!-- Modal ข้อมูลรายปีของ ศดปช.-->
        <div class="modal fade bd-addClassfertilizer-modal-lg" id="myLargeModalLabel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>เพิ่มข้อมูลตามปีงบประมาณ</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-addBudgetFertilizer-modal-lg">เพิ่มข้อมูล</button>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr align="center">
                                <th>ลำดับที่</th>
                                <th>ปีงบประมาณ</th>
                                <th>เงินทุนหมุนเวียน(บาท)</th>
                                <th>จำนวนสมาชิก(ราย)</th>
                                <th>ประธานศูนย์</th>
                                <th>จัดการข้อมูล</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <td align="center">1</td>
                                <td>2559/60</td>
                                <td>500,000</td>
                                <td>200</td>
                                <td>นายสมาน โกษาจันทร์</td>
                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-editBudgetFertilizer-modal-lg">แก้ไข</button> | <button type="button" class="btn btn-danger">ลบข้อมูล</button></td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal addBudgetFertilizer -->
        <div class="modal fade bd-addBudgetFertilizer-modal-lg" id="myLargeModalLabel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>เพิ่มข้อมูลตามปีงบประมาณ</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <label class="control-label">ปีงบประมาณ</label>
                            <select class="custom-select">
                                <option selected>เลือกปีงบประมาณ...</option>
                                <option value="1">2560/61</option>
                                <option value="2">2561/62</option>
                                <option value="3">2562/63</option>
                            </select>
                        </div>

                        <div class="col">
                            <div class="form-row">
                                <label for="classfertilzer_label" class="control-label">8.ระดับ ศดปช. ปี ....</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="classfertilzer_inlineRadio" value="A+">
                                    <label class="control-label">A+</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="classfertilzer_inlineRadio" value="A">
                                    <label class="control-label">A</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="classfertilzer_inlineRadio" value="B">
                                    <label class="control-label">B</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="classfertilzer_inlineRadio" value="C">
                                    <label class="control-label">C</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-row">
                                <label for="classfertilzer_label" class="control-label">9.ศดปช.ดีเด่น</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="award_inlineRadio" value="REGION_LEVEL">
                                    <label class="control-label">ระดับเขต</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="award_inlineRadio" value="PROVINCE_LEVEL">
                                    <label class="control-label">ระดับจังหวัด</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="capital_label" class="control-label">10.เงินทุนหมุนเวียน(บาท)</label>
                            <input type="text" class="form-control" id="capital_text" placeholder="กรอกเงินทุนหมุนเวียน (บาท)">
                        </div>
                        <div class="col">
                            <label for="capital_label" class="control-label">11.จำนวนสมาชิก(ราย)</label>
                            <input type="text" class="form-control" id="capital_text" placeholder="กรอกจำนวนสมาชิก(ราย)">
                        </div>
                        <div class="col">
                            <label for="capital_label" class="control-label">11.1 เกษตรกรทั่วไป(ราย)</label>
                            <input type="text" class="form-control" id="capital_text" placeholder="กรอกเกษตรกรทั่วไป(ราย)">
                        </div>
                        <div class="col">
                            <label for="capital_label" class="control-label">11.2 Smart Farmer(ราย)</label>
                            <input type="text" class="form-control" id="capital_text" placeholder="กรอก Smart Farmer(ราย)">
                        </div>
                        <div class="col">
                            <label for="capital_label" class="control-label">11.3 Young Smart Farmer(ราย)</label>
                            <input type="text" class="form-control" id="capital_text" placeholder="กรอก Young Smart Farmer(ราย)">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal editBudgetFertilizer -->
        <div class="modal fade bd-editBudgetFertilizer-modal-lg" id="myLargeModalLabel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>แก้ไขข้อมูลตามปีงบประมาณ</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <label class="control-label">ปีงบประมาณ</label>
                            <select class="custom-select">
                                <option selected>เลือกปีงบประมาณ...</option>
                                <option value="1">2560/61</option>
                                <option value="2">2561/62</option>
                                <option value="3">2562/63</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="name" class="control-label">1.ชื่อศูนย์จัดการดินปุ๋ยชุมชน</label>
                            <input type="text" class="form-control" id="name" placeholder="กรอกชื่อศูนย์จัดการดินปุ๋ยชุมชน">
                        </div>
                        <div class="col">
                            <label for="name" class="control-label">2.ที่อยู่ศูนย์จัดการดินปุ๋ยชุมชน</label>
                        </div>
                        <div class="form-inline">
                            <div class="col">
                                <label for="provinces" class="control-label">จังหวัด</label>
                                <select id="province" class="custom-select">
                                    <option selected>กรุณาเลือกจังหวัด...</option>
                                    @foreach($province as $v)
                                        <option value="{{ $v->province_id }}">{{ $v->province_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="amphurs" class="control-label">อำเภอ</label>
                                <select id="amphur" class="custom-select">
                                    <option selected>กรุณาเลือกอำเภอ...</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="tambons" class="control-label">ตำบล</label>
                                <select id="tambon" class="custom-select">
                                    <option selected>กรุณาเลือกตำบล...</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="moos" class="control-label">หมู่ที่</label>
                                <input type='text' class="form-control" id="moo" placeholder="กรอกหมู่ที่">
                            </div>
                        </div>
                        <div class="col">
                            <label for="name" class="control-label">3.พิกัดที่ตั้ง ศดปช.
                                <input type="text" class="form-control mr-sm-2 mb-2 mb-sm-0" id="zone" placeholder="ZONE">
                                <input type="text" class="form-control mr-sm-2 mb-2 mb-sm-0" id="x" placeholder="พิกัด X">
                                <input type="text" class="form-control mr-sm-2 mb-2 mb-sm-0" id="y" placeholder="พิกัด Y">
                            </label>
                        </div>
                        <div class="col">
                            <label for="moos" class="control-label">4.พืชหลัก (เลือกได้ 1 ชนิดพืช)</label>
                        </div>
                        <div class="form-inline">
                            <div class="col">
                                <label for="plants" class="control-label">กลุ่มพืช</label>
                                <select id="group_plant" class="custom-select">
                                    <option selected>กรุณาเลือกกลุ่มพืช...</option>
                                    @foreach($groupPlant as $v)
                                        <option value="{{ $v->type_code }}">{{ $v->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="plants" class="control-label">ชนิดพืช</label>
                                <select id="plantname" class="custom-select">
                                    <option selected>กรุณาเลือกชนิดพืช...</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-row">
                                <label class="control-label">6.ระดับ ศดปช. ปี 2559</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="A+">
                                    <label class="control-label">A+</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="A">
                                    <label class="control-label">A</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="B">
                                    <label class="control-label">B</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="C">
                                    <label class="control-label">C</label>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-row">
                                <label class="control-label">7.ระดับ ศดปช. ปี 2560</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="A+">
                                    <label class="control-label">A+</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="A">
                                    <label class="control-label">A</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="B">
                                    <label class="control-label">B</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="C">
                                    <label class="control-label">C</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- list จังหวัด อำเภอ ตำบล และ กลุ่มพืช -->
        <script>
            $('body').on('change',('#province'),function () {
                var provinceId = $(this).val();
                $.get('/amphurList/'+provinceId,function (data) {
                    $('#amphur').html(data)
                })
            })
            $('body').on('change',('#amphur'),function () {
                var amphurCode = $(this).val();
                $.get('/tambonList/'+amphurCode,function (data) {
                    $('#tambon').html(data)
                })
            })
            $('body').on('change',('#group_plant'),function () {
                var typeCode = $(this).val();

                $.get('/plantList/'+typeCode,function (data) {
                        $('#plantname').html(data)
                })
            })
        </script>
        <!-- คำนวณปีที่จัดตั้ง ศดปช. -->
        <script>
            var dt = new Date();

            // Display the month, day, and year. getMonth() returns a 0-based number.
            var year = dt.getFullYear()+543;

            var myDiv = document.getElementById("establish_year");

            var array = new Array('กรุณาเลือกปีที่จัดตั้ง...');

            //Create array of options to be added
            for (var i = 2557; i < year+1; i++) {

                 array.push(i);
            }

            //Create and append select list
            var selectList = document.createElement("select");
            selectList.setAttribute("id", "establishYear");
            myDiv.appendChild(selectList);

            //Create and append the options
            for (var i = 0; i < array.length; i++) {
                var option = document.createElement("option");
                if(array[i]=='กรุณาเลือกปีที่จัดตั้ง...') {
                    option.setAttribute("selected",'');
                }else{
                    option.setAttribute("value", array[i]);
                }
                option.text = array[i];
                selectList.appendChild(option);
            }

        </script>