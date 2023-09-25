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



