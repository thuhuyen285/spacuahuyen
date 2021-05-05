-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2021 lúc 05:11 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phone1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idBL` int(11) NOT NULL,
  `NoiDungBL` varchar(2000) NOT NULL,
  `idDT` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `ThoiDiemBL` datetime DEFAULT NULL,
  `AnHien` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idBL`, `NoiDungBL`, `idDT`, `idUser`, `ThoiDiemBL`, `AnHien`) VALUES
(8, 'haha', 10, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `idDT` int(11) NOT NULL,
  `tieude` varchar(100) DEFAULT NULL,
  `noidung` mediumtext DEFAULT NULL,
  `GiaKM` float DEFAULT NULL,
  `urlHinh` varchar(200) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `MoTa` varchar(4000) DEFAULT NULL,
  `SoLanXem` int(11) NOT NULL,
  `SoLanMua` int(11) NOT NULL,
  `Hot` tinyint(1) NOT NULL,
  `idNSX` int(11) DEFAULT NULL,
  `AnHien` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `SoLuongTonKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`idDT`, `tieude`, `noidung`, `GiaKM`, `urlHinh`, `ngaytao`, `MoTa`, `SoLanXem`, `SoLanMua`, `Hot`, `idNSX`, `AnHien`, `SoLuongTonKho`) VALUES
(37, 'Mụn lưng: Nguyên nhân hình thành và cách điều trị hiệu quả', 'MỤN LƯNG: NGUYÊN NHÂN HÌNH THÀNH VÀ CÁCH ĐIỀU TRỊ HIỆU QUẢ\r\nMụn lưng: Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nKhông chỉ có mụn trên gương mặt mà mụn lưng cũng là vấn đề khiến nhiều chị em “ÁM ẢNH”. Mụn lưng tuy không gây đau nhức, hay ảnh hưởng đến sức khỏe nhưng nó khiến chị em tự ti, ngại diện những bộ áo hở, nhất là vào những ngày hè đẹp trời. Vậy mụn lưng làm sao hết? Có cách nào điều trị mụn lưng hiệu quả không? Mời bạn theo dõi ngay bài viết dưới đây, Mailisa sẽ giải đáp ngay cho bạn.\r\n\r\nTrước khi tìm hiểu về phương pháp điều trị mụn lưng hiệu quả, hãy xác định xem nguyên nhân hình thành mụn lưng của bạn là gì nhé!\r\n\r\n 1.  Nguyên nhân tại sao bị mụn lưng\r\nMụn lưng: Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nTại sao bị mụn lưng là thắc mắc của rất nhiều người?\r\n\r\nGiống như các loại mụn khác, nguyên nhân mụn lưng hình thành là do tuyến bã nhờn hoạt động quá mạnh, tiết ra nhiều dầu nhờn kết hợp với vi khuẩn, tế bào chết trên da gây nên sự bít tắc lỗ chân lông.\r\n\r\nKhông phân biệt giới tính hay độ tuổi, mụn lưng có thể gặp ở bất kỳ ai, cả nam giới và nữ giới. Khiến cho vùng da lưng sần sùi, khó chịu, nếu không giải quyết mụn lưng sớm hoặc trị mụn lưng không đúng cách sẽ để lại sẹo thâm trên da, gây mất thẩm mỹ.\r\n\r\nVậy nếu bị mụn lưng thì phải làm sao? Cùng Mailisa tìm hiểu tiếp trong phần kế tiếp.\r\n\r\n 2.  Phương pháp điều trị mụn lưng hiệu quả \r\nMụn lưng: Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nCó rất nhiều cách điều trị mụn lưng, dưới đây là những cách trị mụn lưng hiệu quả được nhiều chị em áp dụng, bạn có thể tham khảo\r\n\r\n 2.1  Một số mẹo trị mụn lưng tại nhà\r\n \r\n- Tẩy da chết lưng bằng các sản phẩm tẩy da chết toàn thân chuyên dụng ít nhất 1 lần/tuần\r\n- Tắm rửa sạch sẽ hàng ngày bằng miếng bọt biển, bông tắm, cọ tắm. Tránh chà xát quá mạnh gây tổn thương da.\r\n- Trường hợp mụn lưng nặng thì hãy tránh sử dụng các sản phẩm kem dưỡng da lưng bởi dễ gây bít tắc lỗ chân lông, làm trình trạng mụn thêm nặng.\r\n- Lựa chọn các loại quần áo có chất vải thoáng mát, thoải mái, không quá chật, có chất liệu thấm hút mồ hôi, mềm mại.\r\n- Thay ga giường, giặt chăn gối thường xuyên ít nhất 1 lần/tuần.\r\n- Tắm rửa sạch sẽ sau khi tập thể dục thể thao. Lau người khô ráo trước khi mặc quần áo.\r\n 2.2  Phương pháp trị mụn lưng bằng các nguyên liệu thiên nhiên\r\nMụn lưng: Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nBạn có thể hoàn toàn điều trị mụn lưng bằng các loại nguyên liệu từ thiên nhiên. Phương pháp này tuy đơn giản, nhưng hiệu quả cao, an toàn, rất thích hợp để chị em trị mụn lưng tại nhà. \r\n\r\nMột số nguyên liệu trị mụn lưng chị em có thể tham khảo như:\r\n\r\n- Chanh tươi có chứa nhiều Axit citric - tác dụng chống oxy hóa, giúp tẩy tế bào chết, làm da trắng mịn tự nhiên.\r\n- Mật ong - Bột quế: Có tác dụng diệt khuẩn, kháng khuẩn và chữa lành vết thương.\r\n- Giấm táo giúp cân bằng độ pH tự nhiên, kháng viêm, kháng khuẩn, loại bỏ mụn lưng hiệu quả.\r\n- Bột yến mạch có tác dụng loại bỏ dầu thừa trên da, cung cấp vitamin và khoáng chất thiết yếu nhằm sát khuẩn, chống viêm cho da.\r\n- Cà chua có chứa vitamin A, vitamin C và beta-carotene giúp tẩy tế bào chết dưới da, trị mụn lưng và phục hồi các tế bào  trên bề mặt đã bị tổn thương do mụn.\r\n….\r\n\r\nVới trường hợp mụn lưng viêm nhiễm quá nặng bạn nên đến các cơ sở ý tế hoặc trung tâm địa chỉ làm đẹp uy tín để được các bác sĩ thăm khám và có phác đồ điều trị mụn lưng phù hợp.\r\n\r\n 3.  Sản phẩm hỗ trợ phòng ngừa mụn lưng hiệu quả\r\nMụn lưng: Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nMột trong những bước quan trọng để ngăn ngừa mụn lưng hình thành là phải làm sạch da. Sử dụng sữa tắm để vệ sinh làn da toàn thân hàng ngày là phương pháp được nhiều chuyên gia làm đẹp khuyến cáo nên thực hiện.\r\n\r\nMailisa xin giới thiệu M46 - Sữa Tắm Bọt Mây Siêu Sáng Mịn của Doctor Magic là một sản phẩm “SIÊU HOT” được đông đảo các chị em săn lùng. \r\n\r\nKhác với những loại sữa tắm thông thường, M46 - Sữa Tắm Bọt Mây Siêu Sáng Mịn được mệnh danh là “SỮA TẮM MỀM MỊN NHƯ LỤA” có thể nâng niu, chiều chuộng được những làn da khó tính nhất. \r\n\r\nSản phẩm giúp làm sạch da từ sâu bên trong, hội tụ nhiều thành phần axit amin quý hiếm được chiết xuất từ thiên nhiên, cung cấp độ ẩm nuôi dưỡng làn da mịn màng, trắng sáng, săn chắc, khử mùi cơ thể và thư giãn nhờ vào mùi hương lưu giữ dài lâu, đồng thời ngăn ngừa mụn lưng hình thành và phát triển.\r\n\r\nCông dụng chi tiết của M46 - Sữa Tắm Bọt Mây Siêu Sáng Mịn Doctor Magic\r\nMụn lưng: Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nLớp bọt siêu mịn giúp làm sạch da từ sâu bên trong lỗ chân lông, loại bỏ bã nhờn, bụi bẩn và mồ hôi trên cơ thể, giúp lỗ chân lông được khai thông tốt nhất, phòng chống viêm lỗ chân lông.\r\n\r\nHội tụ nhiều thành phần axit amin quý hiếm được chiết xuất từ thiên nhiên cung cấp độ ẩm và nuôi dưỡng làn da mịn màng, trắng sáng, săn chắc.\r\n\r\nHỗ trợ tái tạo phục hồi da, ngăn ngừa các dấu hiệu lão hóa ở làn da body. \r\n\r\nKhử mùi cơ thể, giúp tinh thần trở nên sảng khoái, thư giãn hơn nhờ vào mùi hương lưu giữ dài lâu.\r\n\r\nHiện M46 - Sữa Tắm Bọt Mây Siêu Sáng Mịn Doctor Magic đang được bán với giá hấp dẫn chỉ còn 260.000 vnđ (giá gốc 400.000 vnđ). ', NULL, 'mun-lung.jpg', '2021-05-03 22:42:51', 'Mụn ở lưng tuy không ảnh hưởng quá nhiều tới sức khỏe tuy nhiên nó lại gây ảnh hưởng nặng nề tới thẩm mỹ. Vậy nguyên nhân tại sao bị mụn ở lưng, cách trị mụn lưng như thế nào để hết hoàn toàn ,nên dùng sản...', 0, 0, 0, 1, 0, 0),
(38, 'Phun môi xong có sưng, có đau và có hại gì không?', 'Phun môi xong có sưng, có đau và có hại gì không?\r\nNhằm khắc phục tình trạng môi thâm, xỉn màu và sở hữu đôi môi hồng hào, tươi tắn nhiều chị em đã lựa chọn phương pháp phun môi hiệu ứng son lì 3D tại thẩm mỹ mỹ viện Mailisa. Bạn muốn thực hiện phun môi son lì 3D tại thẩm mỹ viện Mailisa? Nhưng bạn lo lắng về nhiều vấn đề như phun môi có sưng không? Phun môi có hại không? Phun môi có đau không? Trong bài viết dưới đây, Mailisa sẽ giải đáp tất cả các thắc mắc cho bạn. Hãy cùng xem ngay nhé!\r\n\r\n 1.  Phun môi hiệu ứng son lì 3D là gì?\r\nPhun môi hiệu ứng son lì 3D là kỹ thuật mới độc quyền tại thẩm mỹ viện Mailisa với đặc điểm thấy màu không thấy mực, mịn màng, nhẹ nhàng, căng mọng đẹp tự nhiên, kỹ thuật pha phối màu chuẩn tông, tạo ra không gian 3 chiều làm cho bờ môi quyến rũ, thanh lịch nhẹ nhàng nhưng đầy kiêu sa và sang trọng.\r\n\r\n 2.  Ưu điểm của công nghệ phun môi hiệu ứng son lì 3D tại Mailisa\r\n\r\nPhun môi xong có sưng, có đau và có hại gì không?\r\n\r\nKỹ thuật phun môi hiệu ứng son lì 3D có thể khắc phục được những nhược điểm của môi như:\r\n\r\n► Tạo dáng khuôn môi sao cho viền môi đều và rõ nét.\r\n\r\n► Khắc phục tình trạng môi lệch bằng cách \"ăn gian\" hoặc \"thu hẹp\" mà vẫn đảm bảo được vẻ đẹp tự nhiên của đôi môi.\r\n\r\n► Giúp tạo viền môi tròn đầy gợi cảm hoặc những khiếm khuyết khác trên môi như: sẹo ở môi, môi bị lệch, viền môi không rõ nét.\r\n\r\n► Xử lý môi thâm giúp bờ môi trông tươi tắn tự nhiên hơn.\r\n\r\n 3.  Phun môi tại Mailisa có sưng, đau không?\r\nPhun môi xong có sưng, có đau và có hại gì không?\r\n\r\nĐây là thắc mắc của rất nhiều chị em khi muốn đến Mailisa phun môi. Vậy phun môi có đau không? Phun môi có sưng không?\r\n\r\nTheo đó, phun môi hiệu ứng son lì 3D tại thẩm mỹ viện Mailisa ứng dụng công nghệ và kỹ thuật mới, kết hợp với đội ngũ chuyên viên có tay nghề giỏi, vững chuyên môn nên chỉ phun lướt, bay chạm nhẹ trên làn môi, không đè lên môi nên hoàn toàn không gây đau, không sưng, không tổn thương, không cần chích tê, không cần nghỉ dưỡng. Nên các chị em hãy hoàn toàn yên tâm nhé!\r\n\r\n 4.  Phun môi tại Mailisa có hại không?\r\nNhiều chị em lo sợ khi phun môi sẽ gây hại cho sức khỏe bởi màu mực phun xăm. Tuy nhiên trên thực tế khi đến phun môi tại Mailisa chị em có thể hoàn toàn yên tâm bởi dụng cụ vô trùng riêng biệt cho từng khách hàng. \r\nĐặc biệt màu mực Doctor Magic được nhập khẩu chính hãng 100% chất lượng tốt giúp nuôi dưỡng bờ môi căng mọng, an toàn cho sức khỏe, đảm bảo về gu thẩm mỹ hạt mực siêu nhỏ, mịn màng giúp môi lên màu chuẩn tông, phủ đều tất cả những khiếm khuyết như là môi nhăn, thâm, tái, khô ráp, sần sùi, làm xong đẹp ngay, cấp phiếu bảo hành đẹp 100% cho từng khách hàng. \r\n\r\n 5.  Hướng dẫn cách chăm sóc môi sau khi phun \r\nPhun môi xong có sưng, có đau và có hại gì không?\r\n\r\nĐể đôi môi lên màu chuẩn và đẹp nhất sau khi phun, chị em hãy lưu ngay cách hướng dẫn chăm sóc môi sau đây.\r\n\r\n► Sau khi phun môi, nếu có nước mô rỉ ra thì dùng gạc chấm nhẹ vào vùng vừa phun. \r\n\r\n► Sau 4-6 tiếng, chị em vui lòng dùng bông gạc nhúng vào nước sạch, vắt ẩm rồi dặm nhẹ vào vùng da mới phun sau khi ăn ngày 3 lần sáng trưa tối (vệ sinh thật sạch, sau đó dùng gạc thấm thật khô). \r\n\r\n► Đối với môi sau 2 ngày sẽ bị sậm màu, căng, khô cứng, lúc này chị em dùng gạc nhúng vào nước ấm đắp lên môi khoảng 5 – 10 phút những lúc da căng cứng khó chịu. Nếu môi bị nổi mụn nước hoặc nổi mủ trắng thì phải ấn mủ ra vệ sinh sạch, dùng acyclovir thoa lên chỗ mụn ngày 3 lần sáng trưa tối, và uống thuốc theo đơn đã kê.\r\n\r\n► Để bong tróc tự nhiên, không gỡ mày, tuyệt đối không được tô son khi chưa bong mài, chỉ được chặm nhẹ, không được chà xát. Không được để nước đọng trên vùng mới phun quá lâu, sẽ dễ làm tổn thương vùng da mới phun. \r\n\r\n► Từ 3-5 ngày lớp mày sẽ bong ra hoàn toàn. Chị em sử dụng Tinh Chất Dưỡng Môi (nếu có): lấy 1 lượng vừa đủ tinh chất và thoa 1 lớp mỏng lên môi, ngày dùng 2 lần sáng - tối, chỉ sử dụng sau khi vệ sinh sạch và thấm khô môi để dưỡng cho môi mềm mịn và hỗ trợ cho màu môi đẹp hơn.\r\n\r\n► Trong thời gian môi chưa bong tróc chị em hạn chế ăn thức ăn đang cay, đang nóng, thức ăn thức uống có màu như cà phê ... \r\n\r\n► Khi lớp mày vừa bong da còn non, màu chưa lên chuẩn và đều. Màu sẽ còn lên từ từ đều và đẹp hơn theo từng tuần, ổn định đẹp nhất sau 2,5- 3 tháng. Nếu lúc đó chị em cảm thấy thiếu sót vài mũi kim vui lòng quay lại bảo hành miễn phí!\r\n\r\n► Đồng thời, trong thời gian môi chưa bong tróc chị em hạn chế thức ăn quá nóng, quá cay, thức ăn thức uống có màu như cà phê, nước tương ... khi nào môi bong tróc hoàn toàn thì chị em ăn uống bình thường.\r\n\r\nTrên đây là những giải đáp về vấn đề phun môi có đau không, phun môi có sưng không và phun môi có hại không. Mong rằng qua bài viết này chị em đã có được câu trả lời thích đáng cho bản thân và yên tâm hơn khi lựa chọn dịch vụ phun môi hiệu ứng son lì 3D tại Mailisa. ', NULL, 'phunmoicodaukhong.jpg', '2021-05-04 00:00:00', '\"Phun môi có sưng không?\" \"phun môi có hại không?\" \"phun môi có đau không?\" là một trong những câu hỏi mà khách hàng tại Mailisa luôn thắc mắc. Trong bài viết này, Mailisa sẽ giải đáp mọi vấn đề mà mọi người...', 0, 0, 0, 1, 0, 0),
(40, 'Mụn bọc là gì? Nguyên nhân hình thành và cách điều trị hiệu quả', 'Một trong những loại mụn khiến nhiều người lo sợ nhất chính là mụn bọc. Bởi ngoài việc gây mất thẩm mỹ cho gương mặt, mụn bọc sưng mủ, gây đau nhức, khó chịu. Đặc biệt nếu điều trị mụn bọc sai cách sẽ gây ra những hậu quả khôn lường. Vậy làm thế nào để điều trị mụn bọc hiệu quả? Trong bài viết dưới đây Mailisa sẽ giải đáp ngay cho bạn. \r\n\r\nMụn bọc là gì?\r\nMụn bọc hay còn gọi là mụn viêm sưng, mụn viêm mủ là tình trạng của mụn trứng cá thể nặng. Mụn bọc thường có kích thước lớn, có nhân bên trong, thường sưng mủ, gây đau nhức khó chịu. Nếu điều trị mụn bọc sai cách nguy cơ để lại sẹo thâm, sẹo rỗ vĩnh viễn rất cao.\r\n\r\nMụn bọc là gì? Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nNguyên nhân hình thành mụn bọc \r\nGiống như các loại mụn khác, nguyên nhân chính gây ra mụn bọc là do sợi bã nhờn gây bít tắc lỗ chân lông, kết hợp với sự tấn công của vi khuẩn khiến mụn ngày càng sưng to, trở nên hình thành nên mụn bọc viêm. \r\n\r\nNgoài ra mụn bọc còn do nhiều nguyên nhân khác như: tuổi dậy thì, căng thẳng, stress, chăm sóc da không đúng cách, lối sống không khoa học,...\r\n\r\nVậy trị mụn bọc như thế nào? Mụn bọc có nên nặn không? \r\n\r\nTheo lời khuyên của các chuyên gia trong ngành làm đẹp, khi bị mụn đặc biệt là mụn bọc chúng ta không nên nặn. Bởi nặn mụn không đúng cách sẽ làm cho nhân mụn bị vỡ, vi khuẩn trong nốt mụn lây lan ra các vùng da khác, khiến mụn trở nên nặng hơn. Đồng thời nặn mụn sai cách còn để lại sẹo thâm, sẹo rỗ nặng rất khó điều trị về sau.\r\n\r\n>>> Xem thêm: Mụn cóc là gì? Phương pháp điều trị mụn cóc hiệu quả\r\n\r\nMụn bọc là gì? Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nCách điều trị mụn bọc hiệu quả\r\nCó rất nhiều cách trị mụn bọc hiệu quả, bạn có thể tham khảo một số cách trị mụn bọc sau đây:\r\n\r\n♦ Trị mụn bọc bằng nguyên liệu thiên nhiên: Một số nguyên liệu thiên nhiên bạn có thể sử dụng để giúp điều trị mụn bọc tại nhà như nghệ, mật ong, trà xanh, lá diếp cá,...\r\n\r\nBạn có thể kết hợp các nguyên liệu trên với nhau tạo thành hỗn hợp mặt nạ, đắp lên mặt. Thực hiện từ 2 - 3 lần/tuần để có kết quả tốt nhất. \r\n\r\n♦ Trị mụn bọc bằng mỹ phẩm: Hiện nay trên thị trường có rất nhiều loại mỹ phẩm với nhiều thành phần giúp trị mụn, kháng khuẩn như acid salicylic, tea tree oil,...bạn có thể lựa chọn loại mỹ phẩm phù hợp để trị mụn bọc. \r\n\r\nHãy lựa chọn các loại mỹ phẩm từ thương hiệu uy tín, có nguồn gốc xuất xứ rõ ràng để tránh tình trạng mụn của bạn thêm nặng hơn nhé!\r\n\r\nMụn bọc là gì? Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\n♦ Trị mụn bọc bằng công nghệ cao: Là phương pháp điều trị mụn bọc viêm hiệu quả được nhiều chuyên gia khuyến cáo lựa chọn. Đây là phương pháp điều trị mụn bọc an toàn, nhanh chóng,  giúp giải quyết triệt để và tận gốc nốt mụn, ngăn mụn tái đi tái lại nhiều lần. \r\n\r\nTuy nhiên để đạt được hiệu quả tốt nhất, tránh “tiền mất tật mang”, bạn nên chọn địa chỉ điều trị mụn bọc uy tín, chất lượng.\r\n\r\nĐịa chỉ điều trị mụn bọc uy tín\r\nThẩm mỹ viện Mailisa tự hào là địa chỉ điều trị mụn bọc uy tín, an toàn và chất lượng hàng đầu Việt Nam. Với hệ thống máy móc trang thiết bị làm đẹp hiện đại, tiên tiến, cùng đội ngũ chuyên viên, y bác sĩ có trình độ chuyên môn cao, tay nghề giỏi cam kết trị dứt điểm mụn bọc.\r\n\r\nVới bề dày 22 năm trong lĩnh vực thẩm mỹ, Mailisa đã điều trị mụn thành công cho hàng triệu khách hàng. Mụn bọc lâu năm, mụn nặng cỡ nào Đến Mailisa Là Đẹp!\r\n\r\nMụn bọc là gì? Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\nPhương pháp điều trị mụn bọc tại Mailisa \r\nKhi đến với thẩm mỹ viện Mailisa bạn sẽ được trải nghiệm công nghệ điều trị mụn Pixel CO2 mới, độc quyền. Đây là 1 ánh sáng quang nhiệt được chọn lọc thông qua 1 thấu kính hội tụ, tạo thành 1 chùm  tia vi điểm. Khi chuyên viên bác sĩ, trực tiếp dùng ánh sáng tia vào cồi mụn, sẽ làm cho mụn được nghiền nát và phá hủy mụn tận gốc. Ngoài ra ánh sáng này làm tổn thương vùng da ở chế độ an toàn,  từ đó giúp làn da kích thích các mô tế bào khỏe, sản sinh ra lượng collagen làm da căng, săn chắc, se khít lỗ chân lông, giảm nhờn, loại bỏ mụn và làm mờ vết thâm, trả lại cho bạn làn da đẹp tự nhiên. Đồng thời kết hợp với mỹ phẩm Doctor Magic giúp làn da căng, trắng, mịn màng, không tái phát mụn.\r\n\r\n>>> Xem thêm: Cách chăm sóc da bị mụn ở tuổi dậy thì\r\n\r\nMụn bọc là gì? Nguyên nhân hình thành và cách điều trị hiệu quả\r\n\r\n2. Quy trình điều trị mụn công nghệ cao tại Mailisa\r\nKhi điều trị da mụn tại thẩm mỹ viện Mailisa, quý khách hàng sẽ được thực hiện kỹ lưỡng và bài bản với những bước sau:\r\n\r\n♦ Bước 1: Kiểm tra hiện trạng da.\r\n♦ Bước 2: Tư vấn chọn phương pháp và số lần làm đẹp chính xác và phù hợp cho từng khách hàng.\r\n♦ Bước 3: Vệ sinh và làm sạch da, tiến hành thoa tê chuyên dụng trước khi làm đẹp công nghệ cao.\r\n♦ Bước 4: Sử dụng công nghệ cao Pixel CO2 là 1 ánh sáng quang nhiệt được chọn lọc thông qua 1 thấu kính hội tụ, tạo thành 1 chùm  tia vi điểm, khi chuyên viên bác sĩ, trực tiếp dùng ánh sáng tia vào cồi mụn, làm cho mụn được nghiền nát và phá hủy tận gốc. Ngoài ra ánh sáng này làm tổn thương vùng da ở chế độ an toàn,  từ đó làn da sẽ kích thích các mô tế bào khỏe, sản sinh ra lượng collagen làm da căng, săn chắc, se khít lỗ chân lông, giảm nhờn, loại bỏ mụn và làm mờ vết thâm.\r\n♦ Bước 5 : Hướng dẫn vệ sinh chăm sóc da sau khi làm đẹp cho từng khách hàng.\r\n♦ Bước 6: Thông thường quy trình loại bỏ mụn thâm, nặng cỡ nào cũng điều trị đến 2 lần.\r\n3. Giá điều trị mụn tại Mailisa\r\n\r\nHiện dịch vụ điều trị mụn bằng công nghệ cao tại mailisa có giá là 800.000 vnđ (giá gốc 1.600.000 vnđ). Nhanh chân đến ngay Mailisa để nhận được giá ưu đãi!', NULL, '', '2021-05-04 00:00:00', 'Mụn bọc hay còn gọi là mụn viêm sưng, mụn viêm mủ là tình trạng của mụn trứng cá thể nặng. Mụn bọc thường có kích thước lớn, có nhân bên trong, thường sưng mủ, gây đau nhức khó chịu. Nếu điều trị mụn bọc sai...', 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(11) NOT NULL,
  `ThoiDiemDatHang` datetime NOT NULL,
  `ThoiDiemGiaohang` datetime DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `TenNguoiNhan` varchar(100) DEFAULT NULL,
  `EmailNguoiNhan` varchar(100) DEFAULT NULL,
  `DiaChiNguoiNhan` varchar(200) DEFAULT NULL,
  `DienThoaiKhach` int(11) NOT NULL COMMENT 'SDT khách',
  `PhuongThucThanhToan` varchar(2000) NOT NULL COMMENT 'pt thanh toan',
  `PhuongThucGiaoHang` varchar(2000) NOT NULL COMMENT 'pt giao hang',
  `AnHien` tinyint(1) DEFAULT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `GhiChuCuaKhach` varchar(2000) DEFAULT NULL,
  `GhiChuCuaAdmin` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idDH`, `ThoiDiemDatHang`, `ThoiDiemGiaohang`, `idUser`, `TenNguoiNhan`, `EmailNguoiNhan`, `DiaChiNguoiNhan`, `DienThoaiKhach`, `PhuongThucThanhToan`, `PhuongThucGiaoHang`, `AnHien`, `TrangThai`, `GhiChuCuaKhach`, `GhiChuCuaAdmin`) VALUES
(12, '2021-03-03 10:37:10', '2021-03-04 10:37:10', 4, 'huyền', 'thuhuyentara280501@gmail.com', 'hồ chí minh', 12344555, 'ck', 'ghnhanh', 0, 0, NULL, NULL),
(15, '2021-03-04 00:00:00', '2021-03-06 00:00:00', NULL, 'huyền23', 'thuhuyentara280501@gmail.com5', 'ddddd5', 2147483647, 'knhang', 'ghtk', 0, 0, NULL, NULL),
(16, '2021-03-03 16:41:25', NULL, NULL, 'Trần Thị Thu Huyền', 'thuhuyentara280501@gmail.com', 'hồ chí minh2', 2147483647, 'ck', 'ghnhanh', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `idCT` int(11) NOT NULL,
  `idDH` int(11) NOT NULL,
  `idDT` int(11) DEFAULT NULL,
  `TenDT` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` float NOT NULL,
  `urlHinh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`idCT`, `idDH`, `idDT`, `TenDT`, `SoLuong`, `Gia`, `urlHinh`) VALUES
(27, 16, 34, 'iPhone 12 Pro Max 126GB ', 3, 21000000, NULL),
(28, 16, 10, 'Vivo V20 (8GB/128GB)', 1, 9000000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `idNSX` int(11) NOT NULL,
  `TenNSX` varchar(50) NOT NULL,
  `ThuTu` int(11) DEFAULT NULL,
  `AnHien` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`idNSX`, `TenNSX`, `ThuTu`, `AnHien`) VALUES
(1, 'Kiến thức làm đẹp', 2, 1),
(2, 'Tin tức thẩm mĩ viện Linh Hương', 2, 1),
(3, 'Cảm nhận khách hàng', 3, 1),
(4, 'Dịch vụ nổi bật', 4, 1),
(5, 'Nokia', 5, 1),
(6, 'Vsmart', 6, 1),
(7, 'Realme', 7, 1),
(8, 'Vivo', 8, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoctinhdt`
--

CREATE TABLE `thuoctinhdt` (
  `idDT` int(11) NOT NULL,
  `ManHinh` varchar(1000) DEFAULT NULL,
  `HeDieuHanh` varchar(50) DEFAULT NULL,
  `CameraSau` varchar(2000) DEFAULT NULL,
  `CameraTruoc` varchar(2000) DEFAULT NULL,
  `CPU` varchar(50) DEFAULT NULL,
  `RAM` varchar(50) DEFAULT NULL,
  `BoNhoTrong` varchar(50) DEFAULT NULL,
  `TheNho` varchar(50) DEFAULT NULL,
  `TheSim` varchar(50) DEFAULT NULL,
  `DungLuongPin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `KichHoat` varchar(8) DEFAULT NULL,
  `urlHinh` varchar(200) DEFAULT NULL,
  `Email` varchar(200) NOT NULL,
  `VaiTro` tinyint(1) NOT NULL,
  `AnHien` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `Username`, `Password`, `HoTen`, `KichHoat`, `urlHinh`, `Email`, `VaiTro`, `AnHien`) VALUES
(4, 'thuhuyen', '123', 'Tran Thi Thu Huyen', '0', 'admin1.jpg', 'baonguyengia502@fpt.edu.vn\r\n', 1, 1),
(5, 'site', '123', 'Thu Huyen', '1', 'admin2.jpg', 'huyen13139@gmail.com', 0, 1),
(6, 'admin2', '123', 'Nguyen Truong Son', '0', 'admin3.jpg', 'truongson1010@gmail.com.vn', 1, 1),
(7, 'huyen', '50905d7b', 'Tran Thi Thu Huyen', '43207fd5', 'site1.jpg', 'thuhuyentara280501@gmail.com', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idBL`),
  ADD KEY `BL_DT` (`idDT`),
  ADD KEY `BL_User` (`idUser`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`idDT`),
  ADD KEY `dt_nhasanxuat` (`idNSX`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`),
  ADD KEY `DH_USER` (`idUser`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`idCT`),
  ADD KEY `CT_DH` (`idDH`),
  ADD KEY `CT_DT` (`idDT`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`idNSX`);

--
-- Chỉ mục cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD PRIMARY KEY (`idDT`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `idDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `idCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `idNSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  MODIFY `idDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `dienthoai_ibfk_1` FOREIGN KEY (`idNSX`) REFERENCES `nhasanxuat` (`idNSX`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `donhangchitiet_ibfk_1` FOREIGN KEY (`idDH`) REFERENCES `donhang` (`idDH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD CONSTRAINT `thuoctinhdt_ibfk_1` FOREIGN KEY (`idDT`) REFERENCES `dienthoai` (`idDT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;