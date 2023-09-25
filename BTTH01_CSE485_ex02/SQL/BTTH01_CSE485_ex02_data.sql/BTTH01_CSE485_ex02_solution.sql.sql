CREATE TABLE tacgia (
ma_tgia INT UNSIGNED not NULL PRIMARY KEY,
ten_tgia VARCHAR(100) NOT NULL,
hinh_tgia VARCHAR(100)
);


INSERT INTO tacgia (ma_tgia, ten_tgia, hinh_tgia) VALUES
(1, 'Mỹ Tâm', 'https://www.facebook.com/mytam.info'),
(2, 'Hồ Quang Hiếu', 'https://www.facebook.com/hoquanghieutv'),
(3, 'Lương Bích Hữu', 'https://www.facebook.com/Page.LuongBichHuu')

SELECT * FROM tacgia

SELECT COUNT(ma_tgia) FROM tacgia

CREATE TABLE theloai(
  ma_tloai int unsigned PRIMARY KEY auto_increment,
  ten_tloai VARCHAR(50)
);

INSERT INTO theloai(ma_tloai, ten_tloai) VALUES
(1, 'Nhạc trẻ'),
(2, 'Nhạc vàng'),
(3, 'Nhạc Âu Mỹ'),
INSERT INTO theloai (ma_tloai, ten_tloai) VALUES (4, 'Nhạc trữ tình');
INSERT INTO theloai (ma_tloai, ten_tloai) VALUES (5, 'Nhạc việt plus');
select * FROM theloai

CREATE TABLE baiviet (
ma_bviet INT PRIMARY KEY NOT NULL,
tieude VARCHAR(200) NOT NULL,
ten_bhat VARCHAR(100) NOT NULL,
ma_tloai INT UNSIGNED NOT NULL,
tomtat TEXT NOT NULL,
noidung TEXT,
ma_tgia INT UNSIGNED NOT NULL,
ngayviet DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
hinhanh varchar(200),
foreign key (ma_tgia) references tacgia(ma_tgia),
foreign key (ma_tloai) references theloai(ma_tloai)
);
INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) VALUES
(1, 'Cảm nhận bài hát Nơi tình yêu bắt đầu', 'Nơi tình yêu bắt đầu', 2, 'Tóm tắt bài Nơi Tình Yêu Bắt Đầu', 'Nội dung bài hát Nơi Tình Yêu Bắt Đầu', 1, '2016/05/09', 'https://i.ytimg.com/vi/tEoVdgQ2L-0/maxresdefault.jpg'),
(2, 'Cảm nhận bài hát Cát bụi cuộc đời', 'Cát bụi cuộc đời', 1, 'Tóm tắt Cát bụi cuộc đời', 'Nội dung bài hát Cát bụi Cuộc đời', 3, '2019/08/09', 'https://i.ytimg.com/vi/0MkJ-qsSZhA/maxresdefault.jpg'),
(3, 'Cảm nhận bài hát Yêu một người có lẽ', 'Yêu một người có lẽ', 2, 'Tóm tắt Yêu một người có lẽ', 'Nội dung yêu một người có lẽ', 2, '2016/10/19', 'https://i.scdn.co/image/ab67616d0000b273d28b4546b16fc8e0000f277e'),
(4, 'Cảm nhận bài hát Nơi này có anh', 'Nơi này có anh', 2, 'Tóm tắt Nơi này có anh', 'Nội dung Nơi này có anh', 2, '2017/02/24', 'https://i.ytimg.com/vi/FN7ALfpGxiI/maxresdefault.jpg'),
(5, 'Cảm nhận bài hát Về Đâu Mái Tóc Người Thương', 'Về Đâu Mái Tóc Người Thương', 2, 'Tóm tắt bài Về Đâu Mái Tóc Người Thương
', 'Nội dung bài hát Về Đâu Mái Tóc Người Thương', 2, '2012/10/10', 'https://i.ytimg.com/vi/_pf6VHv9sDA/maxresdefault.jpg');

SELECT * FROM baiviettheloai


a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình 
SELECT * FROM baiviet 
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = 'Nhạc trữ tình'


b. Liệt kê các bài viết của tác giả “Nhacvietplus” 
SELECT * FROM baiviet 
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus'

c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. 
SELECT * FROM theloai
WHERE ma_tloai NOT IN (
    SELECT DISTINCT ma_tloai
    FROM baiviet )
    
d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên 
thể loại, ngày viết. 
SELECT ma_bviet AS 'Mã bài viết', tieude AS 'Tên bài viết', ten_bhat AS 'Tên bài hát', ten_tgia AS 'Tên tác giả', ten_tloai as 'Tên thể loại', ngayviet AS 'Ngày viết' FROM baiviet
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai

e. Tìm thể loại có số bài viết nhiều nhất 
SELECT theloai.ten_tloai AS 'Tên  thể loại', COUNT(*) AS 'Số bài viết' FROM theloai
INNER JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ma_tloai, theloai.ten_tloai
HAVING COUNT(*) = (
    SELECT MAX(sbv)
    FROM (SELECT COUNT(*) AS sbv
      	FROM theloai
        	JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
        	GROUP BY theloai.ma_tloai
    ) AS counts
)


f. Liệt kê 2 tác giả có số bài viết nhiều nhất 
SELECT tacgia.ten_tgia AS 'Tên tác giả', COUNT(*) AS 'Số bài viết' FROM tacgia
INNER JOIN baiviet ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY tacgia.ma_tgia, tacgia.ten_tgia
ORDER BY 'Số bài viết' DESC LIMIT 2


g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, 
“em” (2 đ)
SELECT * FROM baiviet WHERE noidung LIKE "%yêu%" OR noidung LIKE "%thương%" OR noidung LIKE "%anh%" OR noidung LIKE "%em%";


h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ 
“yêu”, “thương”, “anh”, “em” (2 đ)
SELECT * FROM baiviet WHERE tieude LIKE "%yêu%" OR tieude LIKE "%thương%" OR tieude LIKE "%anh%" OR tieude LIKE "%em%" or noidung LIKE "%yêu%" OR noidung LIKE "%thương%" OR noidung LIKE "%anh%" OR noidung LIKE "%em%";


i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên 
thể loại và tên tác giả (2 đ)
CREATE VIEW vw_Music AS
	SELECT baiviet.tieude AS 'Tiêu đề', baiviet.ten_bhat AS 'Tên bài hát', theloai.ten_tloai AS 'Tên thể loại', tacgia.ten_tgia AS 'Tên tác giả'
	FROM baiviet
	JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
	JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;

SELECT * FROM vw_Music;
j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách 
Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi. (2 đ)
k. Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo. (2 đ)
l. Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng 
Đăng nhập/Quản trị trang web. (5 đ)
CREATE TABLE Users (
id int UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
username TEXT UNIQUE NOT NULL,
PASSWORD TEXT NOT null
);

SELECT * FROM users
insert into users (username, password) values ('kschoales0', 'wN2{W3Rmucu70wJd');
insert into users (username, password) values ('whilhouse1', 'nF6{"j~!Q""ioO');
insert into users (username, password) values ('jwreakes2', 'gP2?9Di8o9?i=r$');
insert into users (username, password) values ('bseabrocke3', 'bE9|jw<%');
insert into users (username, password) values ('gpeete4', 'oW3{oEA!(');
insert into users (username, password) values ('ckibble5', 'rA1(bt@j/');
insert into users (username, password) values ('ttracy6', 'kO3!Oy3=O>GU');
insert into users (username, password) values ('mzmitrovich7', 'sL3*x4y\s');
insert into users (username, password) values ('gwollers8', 'aU2`KHReYdd');
insert into users (username, password) values ('mmilch9', 'xL9>Pfyx!*(36');
insert into users (username, password) values ('mprewera', 'xX7,S~Bjx<a');
insert into users (username, password) values ('aviveashb', 'fD9_R7$5mH9<.s');
insert into users (username, password) values ('dtussainec', 'jB6|26HA{|');
insert into users (username, password) values ('skellerd', 'dS9,g.QbTO9)');
insert into users (username, password) values ('broskellye', 'kW2/lHIIdy');
insert into users (username, password) values ('amcvittyf', 'oP7_qATOZSu');
insert into users (username, password) values ('afalkinderg', 'aM4*m0=d');
insert into users (username, password) values ('ckitcatth', 'aA6<v"''Sb<}37N');
insert into users (username, password) values ('mwiltshieri', 'xC4&"!qJM');
insert into users (username, password) values ('dwarehamj', 'cU3(l8_,o7l08');
insert into users (username, password) values ('rodeak', 'kN2`}yYj6&)|$');
insert into users (username, password) values ('pwatfordl', 'cV0<T!L&');
insert into users (username, password) values ('frotchellm', 'xH7)oEtuh~');
insert into users (username, password) values ('daltoftn', 'oJ6,bCgY<');
insert into users (username, password) values ('tokendeno', 'bE6@/I''6');
insert into users (username, password) values ('alaurentinp', 'fD7''Lpn34_@');
insert into users (username, password) values ('ewhimperq', 'tQ9)pwyuP9OslfkI');
insert into users (username, password) values ('qvalenter', 'mS4/7oLq.x<Thc');
insert into users (username, password) values ('ebernadons', 'nZ8"Dt)V=Xw5|');
insert into users (username, password) values ('ajestyt', 'lD3{1jnqC6M?rD{');
insert into users (username, password) values ('swarrillowu', 'oC8{lmO''''W$tTBw*');
insert into users (username, password) values ('mpiggensv', 'pH7{ju&)"');
insert into users (username, password) values ('sbalazotw', 'oL1)CY%Au!#f');
insert into users (username, password) values ('rfranklandx', 'aM9"dSEqaQ');
insert into users (username, password) values ('scowndleyy', 'zT5*)+2beWRoQtl');
insert into users (username, password) values ('oginniz', 'qN5.fW3!(v');
insert into users (username, password) values ('nwardhaw10', 'yO6,JU7}"qzjaKE');
insert into users (username, password) values ('hhuckerby11', 'zE9|id=Ib');
insert into users (username, password) values ('achingedehals12', 'yT7_\oScI''FYq~');
insert into users (username, password) values ('csheeran13', 'kW3!HFS*{3t');
insert into users (username, password) values ('wchillingsworth14', 'dX7?XD~8bk|');
insert into users (username, password) values ('vthacker15', 'hN9{3#da');
insert into users (username, password) values ('jmahomet16', 'tN8/~qJF$)C');
insert into users (username, password) values ('vvancassel17', 'qD6`ZFG(KSijs_');
insert into users (username, password) values ('tbuckner18', 'dL8)bT`,de');
insert into users (username, password) values ('cchapleo19', 'cS7?=+YT%ae');
insert into users (username, password) values ('hmewitt1a', 'pX2$juotGy');
insert into users (username, password) values ('wheadings1b', 'hG0%U1N>z@26');
insert into users (username, password) values ('ljamot1c', 'iV4{}`~M(y');
insert into users (username, password) values ('khyne1d', 'tI8*Sr@"Px_sv3J_');
