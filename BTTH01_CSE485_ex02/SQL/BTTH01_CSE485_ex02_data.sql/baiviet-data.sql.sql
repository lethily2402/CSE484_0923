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