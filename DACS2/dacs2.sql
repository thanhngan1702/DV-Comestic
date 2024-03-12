-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 11:25 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dacs2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_08_181544_create_tbl_admin_table', 2),
(7, '2021_10_09_173754_create_tbl_category_product', 3),
(8, '2021_10_15_143253_create_tbl_brand_product', 4),
(9, '2021_10_15_152227_create_tbl_product', 5),
(10, '2021_11_13_192922_tbl_customer', 6),
(11, '2021_11_14_125333_tbl_shipping', 7),
(12, '2021_11_14_155014_tbl_payment', 8),
(13, '2021_11_14_155049_tbl_order', 8),
(14, '2021_11_14_155139_tbl_order_details', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vân', '0837463402', '2021-10-09 07:54:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'Perfect Diary', 'Perfect Diary', 0, NULL, NULL),
(2, '3CE', 'lalala', 0, NULL, NULL),
(3, 'Blackrouge', 'hahhaha', 0, NULL, NULL),
(5, 'Bbia', 'Bbia', 0, NULL, NULL),
(6, 'Romand', '...', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(12, 'Son kem', 'Son kem là loại son môi dạng lỏng giống với kem nền trang điểm và thường được đựng vào lọ giống như dạng son nước.\r\nĐiểm mạnh của son kem đó chính là độ lì màu, thậm chí có thể giữ màu son lên đến nhiều giờngay cả ăn uống son cũng rất khó bị trôi.\r\nTuy nhiên, cũng như son lì, chất sáp trong son có thể sẽ cho bạn cảm giác khô môi 1 chút.', 0, NULL, NULL),
(14, 'Son dưỡng', 'Cơ thể của chúng ta luôn cần bổ sung các chất dinh dưỡng và đôi môi cũng vậy, vẫn luôn cần các chất dinh dưỡng để giữ ẩm và làm môi căng mịn, đầy sức sống. Chính vì vậy mà son dưỡng là loại son tuyệt đối không thể thiếu với các chị em.\r\nSon dưỡng môi chứa các thành phần như vitamin E, Glycery, lô hội (hay còn gọi là nha đam), bơ hay dầu dừa, đây đều là những dưỡng chất quan trọng giúp giữ ẩm cho đôi môi và làm cho môi bạn mềm mại hơn.', 0, NULL, NULL),
(15, 'Son Tint', 'Son tint hay còn được gọi là son nước với kết cấu lỏng nhẹ. Đặc điểm của son tint chính là khả năng bám màu cực tốt. Đây là loại son được đánh giá là 1 trong các loại son lâu trôi nhất.\r\nVới kết cấu dạng lỏng, mỏng nhẹ sẽ cho bạn cảm giác không bị nặng môi như các loại son thỏi khác. Son tint có lớp bóng nhẹ nhẹ tạo hiệu ứng căng mọng, tràn dầy sức sống cho môi. Đây là cây son không thể thiếu trong mùa hè.\r\nThế nhưng nhược điểm của son tint là làm khô môi và khó tẩy trang và khó sử dụng cho bạn nữ có sắc tố môi đậm, thâm.\r\nBên cạnh đó hiện nay các hãng sản xuất còn sản xuất những loại son tint không lì nên người dùng cần tham khảo kỹ trước khi lựa chọn.', 0, NULL, NULL),
(16, 'Son bóng', 'Son bóng đúng với tên gọi khi thoa lên môi sẽ tạo hiệu ứng bóng làm điểm nhấn trên gương mặt của mình. Son bóng thông thường ở dạng gel, có loai được thiết kế với cọ tô và dạng tuyp dễ dàng sử dụng và mang theo. Và đây là loại son rất cần thiết để hoàn thiện vẻ đẹp cho đôi môi.\r\nMặc dù tạo cảm giác cho môi bóng và quyến rũ hơn nhưng son bóng lại lên màu khá kém và mau trôi. Khi tô thường để lại cảm giác dính nhớp, nếu không quen sẽ thấy rất khó chịu.\r\nKhi tô son bóng, bạn chỉ nên dùng một chút ở chính giữa môi rồi tán đều bằng cọ, không bặm môi vì sẽ giảm độ bóng mượt. Một lưu ý nữa khi sử dụng loại son này là nên cột tóc cho gọn gàng, tránh tình trạng tóc dính vào son. Son bóng có thể có nhũ hoặc không có nhũ.', 0, NULL, NULL),
(17, 'Son Satin', 'Son satin hay còn gọi là dòng son lì có dưỡng. Cũng như tên gọi của nó, son satin có chứa nhiều thành phần dưỡng môi hơn các loại son lì một chút.\r\nVì có ít thành phần dưỡng môi, nên khi thoa, son satin sẽ có độ bóng nhẹ, không quá lì nhưng cũng không qúa mềm.   \r\nĐây là một dòng son phù hợp với rất nhiều loại môi. Từ môi khô, sẫm màu, hay môi có nhiều nếp nhăn cũng có thể dùng được loại son này.', 0, NULL, NULL),
(18, 'Son Sheer', 'Đây là định nghĩa khá mới với phái đẹp Việt. Son sheer là dòng son có lượng dưỡng cao, chứa nhiều dầu nên khi thoa lên môi sẽ tạo cảm giác ẩm mượt, bóng nhưng không bóng bằng son bóng.\r\nSon sheer thường thấy nhất trong những son thỏi, và rất ít khi gặp ở son nước và son kem.', 0, NULL, NULL),
(19, 'Son gió', 'Son gió hay còn gọi là colour changing lipstick, là loại son môi có khả năng đổi màu dựa vào tình trạng cơ thể của người sử dụng.\r\nĐiều làm nên sự khác biệt của loại son này chính là chất nhuộm màu có khả năng phản ứng với PH và nhiệt độ.\r\nVì thế, sử dụng cùng một cây son nhưng ở 2 người sẽ cho ra 2 màu son khác nhau. Bạn sẽ có màu son cho riêng mình khi sử dụng loại son này.', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_password`, `created_at`, `updated_at`) VALUES
(5, 'Vân Hoàng', 'hthvan.20it2@vku.udn.vn', '0837463402', '79ea0f0138665989e143f7eba8ac8a24', NULL, NULL),
(6, 'Vân Bii', 'hihi@gmail.com', '0123456789', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(20) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `shipping_id` int(11) UNSIGNED NOT NULL,
  `payment_id` int(11) UNSIGNED NOT NULL,
  `order_total` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(4, 6, 14, 4, '409,500', 'Dang cho xu ly', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(5, 4, 5, 'Perfect Diary L05', '390000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(4, '2', 'Dang cho xu ly', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL,
  `product_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(4, 14, 'ehehhehe', 2, 'adàe', 'àdae', '200000', 'b67.jpg', 0, NULL, NULL),
(5, 19, 'Perfect Diary L05', 1, 'perfect', 'Sản phẩm sử dụng rất tuyệt vời và an toàn không kích ứng da', '390000', 'd51.jpg', 0, NULL, NULL),
(6, 19, 'SET 3 PERFECT DIARY VALENTINE VER + BOX', 1, 'lalala', 'llalla', '1200000', 'bg-12.jpg', 0, NULL, NULL),
(7, 18, 'Perfect Diary Stiletto (Valentine Ver)', 1, 'Hiệu quả sử dụng \r\n  Kết cấu nhung lì sáng tạo\r\n  \r\n  Công dụng nổi bật\r\n  Kết cấu nhung lì sáng tạo,Có kết xuất màu sắc phong phú và kết cấu mịn\r\n  \r\n  Hướng dẫn sử dụng:\r\n  Dùng đầu cọ để kẻ đường viền môi trên và dưới, sau đó tô phần còn lại của môi bằng cách sử dụng phần đầu cọ phẳng.\r\n  \r\n  Khối lượng tịnh\r\n  Khối lượng tịnh: 0,8g\r\n  \r\n  Hướng dẫn bảo quản:\r\n  Tránh đặt sản phẩm ở nơi có nhiệt độ cao và ánh nắng trực tiếp, tránh xa tầm tay trẻ em.\r\n\r\n  Hạn sử dụng\r\n  3 năm', 'Màu sắc sản phẩm:\r\n #L01 #L02 #L03 #L04 #L05 #L06 #L07 #L08 #L09 #L10 #L11 #L12 #L13 #L14 #L15 #L16\r\n#2025 Over the Rainbow\r\n#2045 Liquid Rose\r\n#2049 Blade Runner\r\n#2075 Wander Lust\r\n#2099 Fantastical\r\n\r\n Thành phần:\r\n  1.DIMETHICONE\r\n  2.PHENYL TRIMETHICONE\r\n  3.ETHYLENE / PROPYLENE COPOLYMER\r\n  4. Khác', '369000', '171.jpg', 0, NULL, NULL),
(8, 12, 'Perfect Diary ReadMeGloss', 1, 'Đặc điểm chính\r\n  #ReadMe là dòng sản phẩm khẳng định tạo nên phong cách cho đôi môi bạn\r\n  Thiết kế giống như một tấm thẻ, chất son nhung-lì, son lên rất nhẹ nhàng\r\n  \r\n  Đặc điểm sản phẩm\r\n  1. Lấy cảm hứng từ những chiếc thẻ name card: Thiết kế đặc biệt giống một chiếc thẻ ghi tên, hãy sử dụng chiếc son môi như bản sắc riêng của bạn.\r\n  2. Nói theo cách của bạn: Câu nói tượng trưng khắc ghi con người thật của bạn.\r\n  3. Kết cấu mềm mịn như nhung và mỏng nhẹ: Tự nhiên tôn lên đôi môi xinh của bạn.\r\n  \r\n  Thành phần:\r\n  1.Polydimethylsiloxan,\r\n  2. Polyme liên kết chéo Polydimethylsiloxan,\r\n  3. Isododecane\r\n  \r\n  Hướng dẫn sử dụng\r\n  Bắt đầu ở một góc của môi và kéo cọ đến giữa môi. Sau đó, bắt đầu ở góc khác và từ từ kéo cọ vào giữa để nối đường kẻ của bạn. Tô màu lên môi và tán đều.\r\n  \r\n  Hướng dẫn bảo quản từ cửa hàng:\r\n  Tránh đặt sản phẩm ở nhiệt độ cao và ánh sáng trực tiếp, tránh xa tầm tay trẻ em.\r\n  Ngày hết hạn: 3 năm\r\n  Trọng lượng tịnh: 4g\r\n  Kích thước gói hàng: 40 * 88 * 14mm', '...', '249000', '281.jpg', 0, NULL, NULL),
(9, 12, 'Romand Zero Velvet Tint', 6, '* Đặc trưng:\r\n- Son kem lì Romand Zero Velvet Tint phiên bản Vintage Filter Series hiện đã có tại Thế giới Skinfood có những đặc trưng nổi bật như:\r\n- Vẫn giữ nguyên thiết kế quen thuộc như những phiên bản Zero velvet tint trước đó, phần thân nhựa trong suốt giúp nhìn rõ màu son bên trong và thay đổi về màu của nắp son với một gam màu xanh vintage cổ điển nhưng nổi bật \r\n- Cọ son vát xéo giúp lấy lượng sản phẩm phù hợp và thao tác thoa son lên môi đều màu, dễ dàng tạo viền môi hơn \r\n- Kết cấu chất son mềm mại, lướt nhẹ trên môi một cách trơn mượt và không bết dính, làm mờ rãnh môi hiệu quả, thích hợp cho những đôi môi khô.\r\n- Son kem lì Romand Zero Velvet Tint phiên bản Vintage Filter Series bao gồm những bảng màu mang hiệu ứng vintage nhuộm nắng tạo nên thần thái của riêng bạn với những tông màu trendy hợp mốt, nổi bật nét cá tính của bạn', '* Đối tượng khuyên dùng:\r\n- Dành cho môi\r\n- Dành cho những bạn muốn tìm sản phẩm trang điểm môi\r\n- Dành cho những bạn mới bắt đầu tập trang điểm \r\n\r\n* Hướng dẫn sử dụng: Bặm nhẹ môi vào khăn giấy để loại bỏ bớt phần son dưỡng thừa và tạo một lớp nền mềm mịn nhưng không quá trơn trượt để áp dụng son tint dễ dàng hơn. Nhúng đầu cọ vào son tint và gạt nhẹ vào phần miệng lọ/ cây son để lấy được lượng son vừa đủ dùng. Chấm son tint vào lòng môi trên và dưới, sau đó tán đều chất son qua hai bên trái và phải bằng đầu cọ hoặc tay không để tạo hiệu ứng 3D hoàn hảo cho môi.', '138000', '376.jpg', 0, NULL, NULL),
(10, 15, 'Bbia Last Velvet', 5, '- Đầu tô son nhỏ nhắn, rất dễ dàng để đi viền môi.\r\n- Thân son được làm nhám mặt nhưng vẫn thấy được màu son bên trong, thuận tiện trong việc chọn màu son. \r\n- Kết cấu son nhung mịn với khả năng bám màu siêu siêu đỉnh, khả năng lên màu cực chuẩn, tạo ra đôi môi đẹp một cách sắc nét chỉ sau một quẹt son.\r\n- Chất son siêu mịn, tương đối lì nhờ đó giúp che bớt đi các khuyết điểm (rãnh môi, thâm môi). Nhờ đó đôi môi trở nên căng hơn, rực rỡ mà gợi cảm như được bọc trong nhung.\r\n- Độ bám màu của son khỏi phải bàn, từ 6-7 tiếng. Khiến cho đôi môi luôn rực rỡ suốt cả ngày dài.\r\n- Son dễ tán, dù thoa nhiều lớp vẫn mướt môi.\r\n- Chất kem mềm mượt, không bị bột.\r\n- Che khuyết điểm tốt cho môi.', '.', '200000', '11.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(14, 'Vân', '29 Phan Phu Tiên - Đồng Hới', '0837463402', 'hihi@gmail.com', 'hihi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`,`shipping_id`,`payment_id`),
  ADD KEY `shipping_id` (`shipping_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `tbl_product_ibfk_1` (`brand_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`shipping_id`) REFERENCES `tbl_shipping` (`shipping_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_3` FOREIGN KEY (`payment_id`) REFERENCES `tbl_payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tbl_category_product` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
