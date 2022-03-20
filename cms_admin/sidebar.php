
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>SuperAdmin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Tổng quan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="dashboard.php"><i class="fa fa-circle-o"></i> Thống kê hôm nay<small class="label pull-right bg-green">new</small></a></li>
                <li ><a href="thong-ke-luong-tien.php"><i class="fa fa-circle-o"></i> Thống kê Tổng hợp <small class="label pull-right bg-green">new</small></a></li>
                <li ><a href="thong-ke-user.php"><i class="fa fa-circle-o"></i> Thống kê user</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-money"></i>
                <span>Luồng tiền</span>
                                <i class="fa fa-angle-left pull-right"></i>

              </a>
              <ul class="treeview-menu">
                <li><a href="luong-tien-admin.php"><i class="fa fa-circle-o"></i> Luồng tiền tổng admin</a></li>
                <li><a href="luong-tien-tong-dai-ly.php"><i class="fa fa-circle-o"></i> Luồng tiền tổng đại lý</a></li>
                <li><a href="luong-tien-c1-user.php"><i class="fa fa-circle-o"></i> Luồng tiền C1-> User</a></li>
                <li><a href="chi-tiet-tien-c1-user.php"><i class="fa fa-circle-o"></i> Chi tiết tiền C1 -> User</a></li>
                <li><a href="dua-top-c1.php"><i class="fa fa-circle-o"></i> Đua TOP C1</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-send"></i>
                <span>Cài đặt sự kiện</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Sự kiện vé số <small class="label pull-right bg-green">new</small><i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="cai-dat-su-kien-ve-so.php"><i class="fa fa-circle-o"></i> Cài đặt sự kiện vé số</a></li>
                    <li><a href="sua-so-user.php"><i class="fa fa-circle-o"></i> Sửa số user</a></li>
                  </ul>
                </li>
<!--                 <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a>
                </li> -->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Đại lý</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="danh-sach-dai-ly-cap-1.php"><i class="fa fa-circle-o"></i> Danh sách đại lý cấp 1</a></li>
                <li><a href="lich-su-giao-dich-dai-ly-cap-1.php"><i class="fa fa-circle-o"></i> Lịch sử giao dịch đại lý cấp 1</a></li>
                <li><a href="luong-tien-dai-ly-c1.php"><i class="fa fa-circle-o"></i> Luồng tiền đại lý cấp 1</a></li>
                <li><a href="nang-cap-user-len-c1.php"><i class="fa fa-circle-o"></i> Nâng cấp User lên Đại lý cấp 1</a></li>
                <li><a href="dua-top-c1.php"><i class="fa fa-circle-o"></i> Chốt thưởng đại lý cấp 1</a></li>
                <li><a href="bank-ban.php"><i class="fa fa-circle-o"></i> Bank bẩn</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i>
                <span>Tra cứu</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Thẻ <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="lich-su-nap.php"><i class="fa fa-circle-o"></i> Lịch sử nạp</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Đổi thẻ <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="kiem-ke.php"><i class="fa fa-circle-o"></i> Kiểm kê</a></li>
                        <li><a href="nhap-kho.php"><i class="fa fa-circle-o"></i> Nhập kho</a></li>
                        <li><a href="danh-muc-the.php"><i class="fa fa-circle-o"></i> Danh mục thẻ</a></li>
                        <li><a href="mua-the-24h.php"><i class="fa fa-circle-o"></i> Mua thẻ 24h</a></li>
                        <li><a href="duyet-the.php"><i class="fa fa-circle-o"></i> Duyệt thẻ</a></li>
                      </ul>
                    </li>

                  </ul>
                </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> USDT <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="lich-su-nap-usdt.php"><i class="fa fa-circle-o"></i> Lịch sử nạp</a></li>
                        <li><a href="lich-su-rut-usdt.php"><i class="fa fa-circle-o"></i> Lịch sử rút</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> MOMO  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="lich-su-nap-momo.php"><i class="fa fa-circle-o"></i> Lịch sử MOMO</a></li>
                        <li><a href="doi-tac-momo.php"><i class="fa fa-circle-o"></i> Đối tác MOMO</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> SMS  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="lich-su-nap-sms.php"><i class="fa fa-circle-o"></i> Lịch sử Nạp</a></li>
                        <li><a href="doi-tac-sms.php"><i class="fa fa-circle-o"></i> Đối tác </a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> XoSo  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Cập Nhật kết quả</a></li>
                      </ul>
                    </li>
                <li><a href="canh-bao-dau-vao.php"><i class="fa fa-circle-o"></i> Cảnh báo đầu vào</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> JackPot  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="lich-su-trung-hu.php"><i class="fa fa-circle-o"></i> Lịch sử trúng hũ</a></li>
                        <li><a href="thong-ke-trung-hu.php"><i class="fa fa-circle-o"></i> Thống kê trúng hũ</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Vòng Quay May Mắn  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="vqmm-nguoi-choi.php"><i class="fa fa-circle-o"></i> Người chơi</a></li>
                        <li><a href="vqmm-giai-bit.php"><i class="fa fa-circle-o"></i> Giải bit</a></li>
                        <li><a href="giai-free-spin.php"><i class="fa fa-circle-o"></i> Giải FreeSpin</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Phát Lộc  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="big-win-phat-loc.php"><i class="fa fa-circle-o"></i> BigWin Phát Lộc</a></li>
                        <li><a href="test-phat-loc.php"><i class="fa fa-circle-o"></i> Test Phát Lộc</a></li>
                        <li><a href="tai-khoan-thuong-phat-loc.php"><i class="fa fa-circle-o"></i> Tài khoản thường phát lộc</a></li>
                      </ul>
                    </li>
                <li><a href="bang-xep-hang-thang-thua.php"><i class="fa fa-circle-o"></i>Bảng xếp hạng thắng thua</a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Người chơi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="kiem-tra-nguoi-choi.php"><i class="fa fa-circle-o"></i>Kiểm tra người chơi (Overview)</a></li>
                <li><a href="kiem-tra-lich-su-giao-dich.php"><i class="fa fa-circle-o"></i>Kiểm tra lịch sử giao dịch</a></li>
                <li><a href="kiem-tra-lich-su-game.php"><i class="fa fa-circle-o"></i>Kiểm tra lịch sử game</a></li>
                <li><a href="kiem-tra-otp.php"><i class="fa fa-circle-o"></i>Kiểm tra OTP</a></li>
                <li><a href="kiem-tra-email.php"><i class="fa fa-circle-o"></i>Kiểm tra email</a></li>
                <li><a href="tong-hop-nap-the-user.php"><i class="fa fa-circle-o"></i>Tổng hợp nạp thẻ user</a></li>
                <li><a href="tong-hop-nap-the-theo-ngay.php"><i class="fa fa-circle-o"></i>Top nạp thẻ theo ngày</a></li>
                <li><a href="kiem-tra-lich-su-game-bai.php"><i class="fa fa-circle-o"></i>Kiểm tra lịch sử game bài</a></li>
                <li><a href="kiem-tra-hoan-tien-tai-xiu.php"><i class="fa fa-circle-o"></i>Kiểm tra hoàn tiền tài xỉu</a></li>
                <li><a href="kiem-tra-trieu-hoi-rong-than.php"><i class="fa fa-circle-o"></i>Tra cứu triệu hồi rồng thần</a></li>
                <li><a href="cap-nhat-thong-tin-facebook.php"><i class="fa fa-circle-o"></i>Cập nhật thông tin facebook</a></li>
                <li><a href="lich-su-tai-xiu.php"><i class="fa fa-circle-o"></i>Lịch sử tài xỉu </a></li>
                <li><a href="kiem-tra-clone.php"><i class="fa fa-circle-o"></i>Kiểm tra clone</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dollar"></i> <span>Tool tiền tệ</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="chuyen-khoan-cho-admin.php"><i class="fa fa-circle-o"></i> Chuyển khoản cho Admin</a></li>
                <li><a href="chuyen-khoan-cho-tong-dai-ly.php"><i class="fa fa-circle-o"></i> Chuyển khoản cho Tổng Đại lý</a></li>
                <li><a href="chuyen-khoan-cho-dai-ly.php"><i class="fa fa-circle-o"></i> Chuyển khoản cho Đại lý</a></li>
                <li><a href="chuyen-khoan-cho-nguoi-choi.php"><i class="fa fa-circle-o"></i>  Cộng tiền người chơi</a></li>
</li>
                <li><a href="tru-tien-nguoi-choi.php"><i class="fa fa-circle-o"></i> Trừ tiền người chơi</a></li>
                <li><a href="cong-tien-ket-nguoi-choi.php"><i class="fa fa-circle-o"></i> Cộng tiền két người chơi</a></li>
                <li><a href="tru-tien-ket-nguoi-choi.php"><i class="fa fa-circle-o"></i> Trừ tiền két người chơi</a></li>

                <li><a href="thu-hoi-giao-dich-user-user.php"><i class="fa fa-circle-o"></i> Thu hồi giao dịch user vs user</a></li>
                <li><a href="thu-hoi-giao-dich-user-dai-ly.php"><i class="fa fa-circle-o"></i> Thu hồi giao dịch User ~ ĐL C1</a></li>
                <li><a href="lich-su-giao-dich-ck.php"><i class="fa fa-circle-o"></i> Lịch sử giao dịch cộng/ trừ tiền</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Lệnh rút tiền <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Phê duyệt rút</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Danh sách đã phê duyệt</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gamepad"></i> <span>Tool control</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Tool tài xỉu</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Tool slot</a></li>                
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Tool mini slot</a></li>                
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Lịch sử dùng tool<small class="label pull-right bg-green">new</small></a></li>
              </ul>
            </li>
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-gear"></i> <span>Cấu hình hệ thống</span>  <i class="fa fa-angle-left pull-right"></i>
              <ul class="treeview-menu">

                <li>
                  <a href="cau-hinh-chung.php"><i class="fa fa-circle-o"></i> Cấu hình chung ( phí )</a>
                  <a href="#"><i class="fa fa-circle-o"></i> Game<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="thong-tin-game.php"><i class="fa fa-circle-o"></i> Thông tin game</a></li>
                    <li><a href="hang-nguoi-choi.php"><i class="fa fa-circle-o"></i> Hạng người chơi</a></li>
                    <li><a href="su-kien.php"><i class="fa fa-circle-o"></i> sự kiện</a></li>
                    <li><a href="giftcode-check.php"><i class="fa fa-circle-o"></i>Giftcode check</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Vòng quay <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="so-luot-quay.php"><i class="fa fa-circle-o"></i> Số lượt quay</a></li>
                      </ul>
                    </li>
                    <li><a href="notify.php"><i class="fa fa-circle-o"></i>Notify</a></li>
                  </ul>
                </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Thẻ cào <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="nha-mang.php"><i class="fa fa-circle-o"></i>Nhà mạng</a></li>
                        <li><a href="the-cao.php"><i class="fa fa-circle-o"></i>Thẻ cào</a></li>
                        <li><a href="doi-tac.php"><i class="fa fa-circle-o"></i>Đối tác</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> USDT  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="cau-hinh-usdt.php"><i class="fa fa-circle-o"></i> Cấu hình USDT</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Ngân hàng  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="cau-hinh-ngan-hang.php"><i class="fa fa-circle-o"></i> Ngân hàng</a></li>
                        <li><a href="thong-tin-ngan-hang.php"><i class="fa fa-circle-o"></i> Thông tin ngân hàng</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Cấu hình bot  <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="bot-thuong-truc.php"><i class="fa fa-circle-o"></i> Bot thường trực</a></li>
                        <li><a href="thoi-gian-bot.php"><i class="fa fa-circle-o"></i> Thời gian </a></li>
                        <li><a href="bom-tien-bot.php"><i class="fa fa-circle-o"></i> Thêm tiền </a></li>
                      </ul>
                    </li>
              </ul>
              </a>
            </li>
            <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-gift"></i> <span>Giftcode</span>
                <small class="label pull-right bg-green">new</small>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>Tạo chiến dịch</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Tạo giftcode</a></li>                
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Thống kê giftcode</a></li>
              </ul>
              </a>
            </li>
<!--             <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li> -->

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>