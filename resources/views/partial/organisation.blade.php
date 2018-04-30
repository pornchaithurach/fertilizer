<div class="container">

    <div class="col-sm-12 text-center display-4">บันทึกข้อมูลศูนย์จัดการดินปุ๋ยชุมชน</div>
    <form method="POST" action="http://example.dev/songs" >
        <input name="_token" type="hidden" value="FaHZmwcnaOeaJzVdyp4Ml8B6l1N1DLUDsZmsjRFL">

        <ul id="clothing-nav" class="nav nav-tabs" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">ข้อมูลศูนย์</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    ปีงบประมาณ
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#dropdown-now" role="tab" id="dropdown-now-tab" data-toggle="tab" aria-controls="dropdownnow">2561</a>
                    <a class="dropdown-item" href="#dropdown-back" role="tab" id="dropdown-back-tab" data-toggle="tab" aria-controls="dropdownback">ย้อนหลัง</a>
                </div>
            </li>

        </ul>

        <!-- Content Panel -->
        <div id="clothing-nav-content" class="tab-content">
            <div role="tabpanel" class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
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
                    <select class="custom-select">
                        <option selected>กรุณาเลือกจังหวัด...</option>
                        <option value="10">กรุงเทพมหานคร</option>
                        <option value="11">สมุทรปราการ</option>
                        <option value="12">นนทบุรี</option>
                        <option value="13">ปทุมธานี</option>
                        <option value="14">พระนครศรีอยุธยา</option>
                        <option value="15">อ่างทอง</option>
                        <option value="16">ลพบุรี</option>
                        <option value="17">สิงห์บุรี</option>
                    </select>
                </div>

                <div class="col">
                    <label for="provinces" class="control-label">อำเภอ</label>
                    <select class="custom-select">
                        <option selected>กรุณาเลือกอำเภอ...</option>
                        <option value="10">กรุงเทพมหานคร</option>
                        <option value="11">สมุทรปราการ</option>
                        <option value="12">นนทบุรี</option>
                        <option value="13">ปทุมธานี</option>
                        <option value="14">พระนครศรีอยุธยา</option>
                        <option value="15">อ่างทอง</option>
                        <option value="16">ลพบุรี</option>
                        <option value="17">สิงห์บุรี</option>
                    </select>
                </div>
                <div class="col">
                    <label for="provinces" class="control-label">ตำบล</label>
                    <select class="custom-select">
                        <option selected>กรุณาเลือกตำบล...</option>
                        <option value="10">กรุงเทพมหานคร</option>
                        <option value="11">สมุทรปราการ</option>
                        <option value="12">นนทบุรี</option>
                        <option value="13">ปทุมธานี</option>
                        <option value="14">พระนครศรีอยุธยา</option>
                        <option value="15">อ่างทอง</option>
                        <option value="16">ลพบุรี</option>
                        <option value="17">สิงห์บุรี</option>
                    </select>
                </div>
                    <div class="col">
                        <label for="moos" class="control-label">หมู่ที่</label>
                        <select class="custom-select">
                            <option selected>กรุณาเลือกหมู่ที่...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
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
                    <label for="moos" class="control-label">4.พืชหลัก (เลือก 1 ชนิดพืช)</label>
                    <select class="custom-select">
                        <option selected>เลือกได้ 1 ชนิดพืชเท่านั้น...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="col">
                    <label class="control-label">5. ปี พ.ศ. ที่จัดตั้ง ศดปช.</label>
                    <select class="custom-select">
                        <option selected>เลือกปีที่จัดตั้ง...</option>
                        <option value="1">2560</option>
                        <option value="2">2561</option>
                        <option value="3">2562</option>
                        <option value="4">2563</option>
                    </select>
                </div>
                <div class="col">
                    <div class="form-row">
                        <label class="control-label">6.ระดับ ศดปช. ปี 2559</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                            <label class="control-label">A+</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                            <label class="control-label">A</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                            <label class="control-label">B</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4">
                            <label class="control-label">C</label>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-row">
                        <label class="control-label">7.ระดับ ศดปช. ปี 2560</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                            <label class="control-label">A+</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                            <label class="control-label">A</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                            <label class="control-label">B</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4">
                            <label class="control-label">C</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    slider
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="dropdown-now" aria-labelledby="dropdown-now-tab">
                <div class="col">
                    <div class="col-sm-12 text-center display-6">ปีงบประมาณ 2561</div>

                </div>
                <div class="col">
                    <div class="form-row">
                        <label class="control-label">8.ระดับ ศดปช. ปี </label>
                        <div class="form-check form-check-inline">
                            <input type="text" class="form-control" id="name" placeholder="ระบุปี...">
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                            <label class="control-label">A+</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                            <label class="control-label">A</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                            <label class="control-label">B</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4">
                            <label class="control-label">C</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-row">
                        <label class="control-label">9.ศดปช. ดีเด่น </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                            <label class="control-label">ระดับเขต</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                            <label class="control-label">ระดับจังหวัด</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                            <label class="control-label">ไม่ได้รับรางวัล</label>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <label class="control-label">10.เงินทุนหมุนเวียน (บาท)</label>
                    <div class="form-check form-check-inline">
                        <input type="text" class="form-control" id="working_capital" placeholder="ระบุจำนวนเงินทุนหมุนเวียน">
                    </div>
                </div>
                <div class="col">
                    <div class="form-check form-check-inline">
                        <label class="control-label">11.จำนวนสมาชิก (ราย) ในจำนวนนี้เป็น</label>
                        <input type="text" class="form-control" id="memberOrganiseNum" placeholder="ระบุจำนวนสมาชิก">
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="control-label">11.1 เกษตรกรทั่วไป (ราย)</label>
                        <input type="text" class="form-control" id="memberOrganiseNum" placeholder="ระบุจำนวนสมาชิกกลุ่มเกษตรกรทั่วไป">
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="control-label">11.2 Young Smart Farmer (ราย)</label>
                        <input type="text" class="form-control" id="memberOrganiseNum" placeholder="ระบุจำนวนสมาชิกกลุ่มเกษตรกรทั่วไป">
                    </div>

                </div>


            </div>

            <div role="tabpanel" class="tab-pane fade" id="dropdown-back" aria-labelledby="dropdown-back-tab">
                <p>A boot is a type of footwear and a specific type of shoe. Most boots mainly cover the foot and the ankle, while some also cover some part of the lower calf. Some boots extend up the leg, sometimes as far as the knee or even the hip.</p>
            </div>
        </div>

    </form>
</div>