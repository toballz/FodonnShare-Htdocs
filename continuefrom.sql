-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 09:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `continuefrom`
--

-- --------------------------------------------------------

--
-- Table structure for table `discuss`
--

CREATE TABLE `discuss` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discuss`
--

INSERT INTO `discuss` (`id`, `title`, `description`) VALUES
(845345, 'Contact Us', '<style type=\"text/css\"> .contact{text-align: center;}.contact>input,.contact>textarea{width: 100%;padding: 12px;margin-bottom: 12px}.contact>textarea{height: 152px}.submitcontactv{cursor:pointer;background:#10734d;}</style><div class=\"tabie contact\"> <input type=\"text\" name=\"fname\" placeholder=\"Full Name\" value=\"\"> <input type=\"email\" name=\"femail\" placeholder=\"Email\" value=\"\"> <input type=\"number\" name=\"fphone\" placeholder=\"Phone Number\" value=\"\"> <textarea type=\"text\" name=\"ftextmessage\" placeholder=\"Type in your message\"></textarea> <input type=\"submit\" class=\"submitcontactv\"> </div><script type=\"text/javascript\">$(\".submitcontactv\").click(function(){var fbn=$(\'[name=\"fname\"]\').val().trim(); var fer=$(\'[name=\"femail\"]\').val().trim(); var foj=$(\'[name=\"fphone\"]\').val().trim(); var fma=$(\'[name=\"ftextmessage\"]\').val().trim(); if(fbn!=\"\" && fer!=\"\"&& foj!=\"\"&& fma!=\"\"){$.post(apiconn,{uname:\"<;?>\", api:\"rats\", t:\"contact:businessEmail\", fname:fbn, vemail:fer, bphone:foj, rmessage:fma}, function(httpdatas){if(httpdatas.code==200){alert(httpdatas.message);location.reload();}});}else{alert(\"Fill in all areas.\");}}); </script>'),
(38549545, 'Copyright Policy', '<h1>Copyright Policy for File Uploading Website</h1> <h3>Effective Date: [ \n1st July 2023 ]</h3> <h2>1. Introduction</h2> <p>This Copyright Policy (hereinafter referred to as the \"Policy\") outlines the terms and conditions governing the use of copyrighted material on our file uploading website (hereinafter referred to as the \"Website\"). By using the Website, users agree to comply with this Policy.</p><h2>2. Copyright Ownership</h2> <h3>2.1. All copyright and intellectual property rights in the content uploaded to the Website by users remain with the original creators or their authorized representatives.</h3> <h3>2.2. By uploading content to the Website, users represent and warrant that they have the necessary rights, licenses, or permissions to share, distribute, and make the content available to others.</h3> <h2>3. Prohibited Content</h2> <h3>3.1. Users must not upload or share content that infringes upon the copyrights or other intellectual property rights of others. This includes, but is not limited to, unauthorized copies of copyrighted works, pirated software, and other protected material.</h3> <h3>3.2. Users must not upload or share content that violates any laws, regulations, or third-party rights, including but not limited to defamatory, obscene, or pornographic material.</h3> <h2>4. Copyright Infringement Notification</h2> <h3>4.1. If you believe that any content available on the Website infringes upon your copyright or other intellectual property rights, please promptly notify us by sending a written notice (a \"Notice\") containing the following information:</h3> <ul> <li>Your contact information, including your name, address, telephone number, and email address.</li><li>Sufficient details to identify the copyrighted work or other intellectual property right claimed to have been infringed.</li><li>Sufficient details to identify the specific content on the Website that is allegedly infringing, including the URL or other identifying information.</li><li>A statement that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law.</li><li>A statement, made under penalty of perjury, that the information provided in the Notice is accurate and that you are the copyright owner or authorized to act on behalf of the owner.</li></ul> <h3>4.2. Notices should be sent to:</h3> <p>Inquiry@@{[acid: domain]}</p><span> or use our contact page.</span> <h2>5. Copyright Infringement Counter-Notification</h2> <h3>5.1. If you believe that your content was wrongly removed or disabled due to a copyright infringement claim, you may send us a counter-notification (a \"Counter-Notice\") containing the following information:</h3> <ul> <li>Your contact information, including your name, address, telephone number, and email address.</li><li>Identification of the material that has been removed or to which access has been disabled and the location at which the material appeared before it was removed or disabled.</li><li>A statement, made under penalty of perjury, that you have a good faith belief that the material was removed or disabled as a result of mistake or misidentification.</li><li>A statement that you consent to the jurisdiction of the federal district court in which your address is located or, if outside the United States, to the jurisdiction of any federal district court in which the Website may be found.</li><li>A statement that you will accept service of process from the person who provided the original Notice or an agent of such person.</li><li>Your electronic or physical signature.</li></ul> <h3>5.2. Counter-Notices should be sent to:</h3> <p>Inquiry@@{[acid: domain]}</p><span> or use our contact page.</span> <h2>6. Repeat Infringers</h2> <h3>6.1. We respect the rights of copyright holders and will suspend or terminate, at our sole discretion, the accounts of users who are found to be repeat infringers.</h3> <h2>7. Modification of Policy</h2> <h3>7.1. We reserve the right to modify or update this Policy at any time, and the revised version will be effective immediately upon posting on the Website.</h3> <h2>8. Contact Information</h2> <p>If you have any questions, concerns, or comments regarding this Policy, please contact us at:</p><p>Inquiry@@{[acid: domain]}</p><span> or use our contact page.</span>'),
(92365832, 'How to install on desktop - windows 7,8,10,11', '<style>.dhgj677{line-height:21px}\n@keyframes sg {50% {box-shadow: 0 0 50px 15px #48abe0;} }\n.downloadaff{border-radius:24px;animation: sg 2.3s infinite;background:#2bc22b;padding:21px;text-align: center;color: #fff;margin:12px;margin-bottom:4px;}\n.quotetab{padding:42px}\n.quoteintab{padding:12px;background:#f7f5f2;color:#000}\n.imff{border-top:1px solid #000}\n</style>\n<div class=\"dhgj677\">\n\n	<div>\n		<b>1.)</b>\n		Download the @{[acid: domain]} desktop app.\n		<a href=\"/ret/downloadapp/Fodonn-Share-Installer.exe\" class=\"downloadaff\">DOWNLOAD APP</a>\n		<!--<div style=\"padding-left:12px\">sha256: </div>-->\n		\n		<div class=\"quotetab\"><div class=\"quoteintab\">\n			<div>- You might get a message like this shown below. We couldn\'t afford a certificate from windows, <b>but to assure you, @{[acid: domain]} app is absolutely 100% safe and so are your informations</b>.</div>\n			<br/>\n			<div class=\"imff\"><img src=\"\\ret\\img\\t4ata36q.png\"/></div>\n			<br/><br/>\n			<div>- Click on the 3 dots on the side and tap <b>keep</b>.</div>\n			<br/>\n			<div class=\"imff\"><img src=\"\\ret\\img\\t45ei6r.png\"/></div>\n		</div></div>\n	</div>\n		\n	<div>	\n		<b>2.)</b>\n		After downloading the  @{[acid: domain]}  desktop app.\n		\n		<div class=\"quotetab\"><div class=\"quoteintab\">\n			<div>You might get a message from microsoft defender like this: </div>\n 			<br/>\n			<div class=\"imff\"><img src=\"\\ret\\img\\t4w74.png\"/></div>\n			<br/>\n			<div>Click <b>\"More info\"</b> and then click <b>\"Run Anyway\"</b></div>\n		</div></div>\n	</div>\n		\n	<div>	\n		<b>3.)</b>&nbsp;\n		- After all the above, you are all set.\n		<br/>\n		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n		- Login and Asynchronous send files, texts or links across multiple device.\n	</div>\n\n</div>'),
(95912345, 'Terms of Service', ' <p>Effective Date: [ 1st July 2023 ]</p><h2>1. Use of the Website</h2> <p>a. Eligibility: You must be at least 13 years old or have reached the legal age of majority in your jurisdiction to use our Website. By accessing or using the Website, you represent and warrant that you meet the eligibility requirements.</p><p>b. User Account: Some features of our Website may require you to create a user account. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You agree to provide accurate, current, and complete information during the registration process. You must promptly update your account information to keep it accurate and complete.</p><p>c. Prohibited Activities: When using our Website, you agree not to engage in any of the following activities:<br>- Violating any applicable laws, regulations, or third-party rights.<br>- Using the Website for any unlawful, unauthorized, or fraudulent purposes.<br>- Interfering with or disrupting the integrity or performance of the Website or its underlying infrastructure.<br>- Uploading or transmitting any viruses, malware, or harmful code.<br>- Engaging in any activity that may impose an unreasonable burden or load on our systems.</p><h2>2. Content</h2> <p>a. User-generated Content: Our Website may allow users to submit or post content, including but not limited to text, images, videos, or other materials. You retain ownership of any content you submit, but by posting or submitting content on our Website, you grant us a worldwide, non-exclusive, royalty-free license to use, reproduce, modify, adapt, publish, translate, distribute, and display such content for the purpose of operating and promoting the Website.</p><p>b. Prohibited Content: You agree not to submit or post any content that is:<br>- Unlawful, defamatory, obscene, or violates any third-party rights.<br>- False, misleading, or deceptive.<br>- Infringes any intellectual property rights.<br>- Contains viruses, malware, or harmful code.</p><p>c. Monitoring and Removal: We reserve the right to monitor, review, and remove any content that violates these Terms or is otherwise objectionable. However, we do not assume any obligation to monitor user-generated content.</p><h2>3. Intellectual Property</h2> <p>a. Ownership: All intellectual property rights in the Website, including but not limited to trademarks, logos, design elements, and content, are owned by us or our licensors. These Terms do not grant you any right or license to use any intellectual property displayed on the Website unless expressly authorized by us.</p><p>b. User Content: You retain ownership of any content you submit or post on the Website. However, by submitting or posting content, you grant us the license as described in Section 2(a).</p><h2>4. Third-Party Links and Services</h2> <p>a. Third-Party Websites: Our Website may contain links to third-party websites or services that are not owned or controlled by us. We do not endorse or assume any responsibility for the content, privacy policies, or practices of any third-party websites or services. Your use of such websites or services is at your own risk.</p><h2>5. Limitation of Liability</h2> <p>a. Disclaimer: The Website is provided on an \"as is\" and \"as available\" basis without warranties of any kind, whether express or implied. We do not warrant that the Website will be uninterrupted, error-free, secure, or free from viruses or other harmful components. Your use of the Website is at your own discretion and risk.</p><p>b. Limitation of Liability: To the maximum extent permitted by applicable law, we shall not be liable for any indirect, incidental, consequential, or punitive damages arising out of or in connection with your use of the Website or these Terms.</p><h2>6. Indemnification</h2> <p>You agree to indemnify and hold us harmless from any claims, damages, liabilities, costs, or expenses arising out of or in connection with your use of the Website, your violation of these Terms, or your violation of any rights of any third party.</p><h2>7. Modifications to the Terms</h2> <p>We reserve the right to modify or update these Terms at any time. Any changes will be effective immediately upon posting the revised Terms on the Website. Your continued use of the Website after the posting of any changes constitutes your acceptance of the modified Terms.</p><h2>8. Governing Law and Jurisdiction</h2> <p>These Terms shall be governed by and construed in accordance with the laws of [Your Jurisdiction]. Any legal actions or proceedings arising out of or relating to these Terms shall be exclusively brought in the courts of [Your Jurisdiction], and you consent to the jurisdiction of such courts.</p><h2>9. Contact Us</h2> <p>If you have any questions or concerns regarding these Terms, please contact us at contact page on this website.</p>'),
(98237435, 'Delete an account', ' <h1>To request the deletion of your account, please follow the steps below:</h1><ol> <li>Log into your account on the app.</li><li>Navigate to the \"Account Settings\" or \"Profile Settings\" section.</li><li>Look for the option to manage your account or privacy settings.</li><li>Within the account or privacy settings, locate the option to \"Delete Account\" or \"Request Account Deletion.\"</li><li>Follow the prompts or instructions provided to initiate the account deletion process.</li></ol><b>Upon account deletion, we will delete the following types of data associated with your account:</b><ul> <li>Personal information: Any personal information provided during the account registration process, such as name, email address, phone number, and profile information.</li><li>Account credentials: Usernames and passwords associated with your account.</li><li>Profile data: Any additional profile information you may have provided, such as profile pictures or bios.</li><li>Payment information: If applicable, payment details associated with your account.</li></ul><b>Please note that some data may be retained for a limited period or as required by law or legitimate business purposes, including but not limited to:</b><ul> <li>App usage data: Aggregated or anonymized data related to your app usage, which cannot be directly linked to your deleted account.</li><li>Log information: System-generated logs that may contain IP addresses, access times, and other technical details, which are retained for security and troubleshooting purposes.</li></ul><p>We strive to delete your personal information and associated account data promptly upon receiving a valid account deletion request. However, please note that residual copies of deleted information may remain in our backup systems for a limited period.</p><p>If you have any questions or require further assistance regarding account deletion or data retention, please contact us using the provided contact information in this Privacy Policy.</p><p>Please refer to our <a style=\"display:inline;\" href=\"./pp.php\">Privacy Policy</a> for more details on how we handle your personal information and data.</p>'),
(352591234, 'Ask Community', 'Feel free to openly share any assistance you require, which other users may possess solutions for. Our team will diligently verify and approve relevant answers. In the event that an answer doesn\'t meet the criteria, we will promptly respond to your inquiries.'),
(353491234, 'Privacy Policy', '<p>Effective Date: <strong>[ 1st July 2023]</strong></p><p>Thank you for using our app designed for developers and for productivity. This Privacy Policy explains how we collect, use, disclose, and safeguard your personal information when you use our app and the choices you have associated with that information. Please read this Privacy Policy carefully to understand our practices regarding your personal information.</p><p>If you do not agree with the data practices described in this Privacy Policy, you should not use our app.</p><h2><strong>1. Information We Collect</strong></h2><div class=\"tabr\"><h3><strong>1.1. Personal Information</strong></h3><p>We may collect personal information that you voluntarily provide to us when you use our app. This information may include, but is not limited to:</p><ul><li>Name and contact information (e.g., email address, phone number)</li><li>Username and password</li><li>Payment information (if applicable)</li></ul></div><h3><strong>1.2. Usage and Log Data</strong></h3><div class=\"tabr\"><p>When you access or use our app, we may automatically collect certain information about your usage of the app, including:</p><ul><li>Device information (e.g., device type, operating system)</li><li>IP address</li><li>App usage data</li><li>Log information (e.g., access times, pages viewed, actions taken within the app)</li></ul></div><h2><strong>2. How We Use Your Information</strong></h2><div class=\"tabr\"><p>We may use the personal information we collect from you for the following purposes:</p><ul><li>To provide and maintain our app\'s functionality</li><li>To improve our app and develop new features</li><li>To personalize your experience and ensure the content presented is relevant to you</li><li>To communicate with you regarding updates, notifications, and customer support</li><li>To process payments, if applicable</li><li>To enforce our terms and conditions and protect our legal rights</li></ul></div><h2><strong>3. How We Disclose Your Information</strong></h2><div class=\"tabr\"><p>We may disclose your personal information to third parties in the following circumstances:</p><ul><li>With your consent or at your direction</li><li>To comply with applicable laws, regulations, or legal processes</li><li>To enforce our rights or investigate potential violations of our terms and conditions</li><li>To implement thrid party usage (e.g., payment, analytics)</li><li>In connection with a merger, acquisition, or sale of our company or its assets</li></ul></div><h2><strong>4. Data Retention</strong></h2><div class=\"tabr\"><p>We automatically delete your data and usage after 90 days. We will retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law.</p></div><h2><strong>5. Security</strong></h2><div class=\"tabr\"><p>We are committed to protecting your personal information and have implemented appropriate technical and organizational measures to safeguard it. However, please note that no method of transmission over the internet or method of electronic storage is 100% secure.</p></div><h2><strong>6. Your Choices</strong></h2><div class=\"tabr\"><p>You have certain choices regarding the personal information we collect from you. You can:</p><ul><li>Opt out of receiving promotional communications from us</li><li>Update or correct your personal information</li><li>Delete your account and personal information from our app</li></ul></div><h2><strong>7. Children\'s Privacy</strong></h2><div class=\"tabr\"><p>Our app is not intended for individuals under the age of 13. We do not knowingly collect personal information from children. If you believe we may have collected personal information from a child, please contact us immediately.</p></div><h2><strong>8. Changes to This Privacy Policy</strong></h2><div class=\"tabr\"><p>We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will notify you of any material changes by posting the updated Privacy Policy on our website. Please review this Privacy Policy periodically for any changes and we will notify you with the information you provide us with.</p></div><h2><strong>9. Contact Us</strong></h2><div class=\"tabr\"><p>If you have any questions, concerns, or requests regarding this Privacy Policy, please contact us <strong>using our app or the website.</strong>.</p></div><p>By using our app, you consent to the collection, use, disclosure, and retention of your personal information as outlined in this Privacy Policy.</p><p><i>This Privacy Policy is incorporated into and subject to our Terms and Conditions.</i></p>'),
(543451235, 'Cookie Policy', ' <p>Effective Date: [ 1st July 2023]</p><p>This Cookie Policy explains how (\"we,\" \"us,\" or \"our\") uses cookies and similar technologies on our website. By accessing or using our Website, you consent to the use of cookies as described in this policy.</p><h2>What are cookies?</h2> <p>Cookies are small text files that are placed on your computer or mobile device when you visit a website. They are widely used to make websites work more efficiently, as well as to provide information to website owners.</p><h2>How do we use cookies?</h2> <p>We use cookies for the following purposes:</p><ol> <li><strong>Essential cookies:</strong> These cookies are necessary for the operation of our Website. They enable core functionality such as page navigation, access to secure areas, and language preferences. You cannot disable these cookies without impacting the functioning of the Website.</li><li><strong>Analytical cookies:</strong> We use analytical cookies to collect information about how visitors use our Website, such as the number of visitors, the pages they visit, and the time spent on the Website. This information helps us analyze and improve the performance and functionality of our Website. These cookies do not collect any personally identifiable information.</li><li><strong>Functionality cookies:</strong> These cookies allow the Website to remember choices you make (such as your username, language, or region) and provide enhanced, personalized features. They may also be used to provide services you have requested, such as video streaming or social media integration. The information collected by these cookies is anonymized and cannot track your browsing activity on other websites.</li><li><strong>Advertising cookies:</strong> We work with third-party advertising partners who may use cookies to deliver relevant advertisements to you based on your interests. These cookies collect information about your browsing habits and are used to personalize the advertising content you see on our Website or other websites. Please note that we do not have control over the cookies placed by third-party advertisers, and their use is subject to their own privacy policies.</li></ol> <h2>How to control cookies?</h2> <p>You can control and manage cookies in various ways. Please note that blocking or disabling certain cookies may impact the functionality of our Website.</p><ol> <li><strong>Browser settings:</strong> Most web browsers allow you to manage your cookie preferences through the browser settings. You can typically find these settings in the \"Options\" or \"Preferences\" menu of your browser. You can choose to block or delete cookies, or selectively accept certain types of cookies.</li><li><strong>Third-party opt-out:</strong> Some third-party advertising partners provide opt-out mechanisms to enable you to control the collection and use of your data for targeted advertising. You can visit the websites of these third parties to opt out of their cookies.</li></ol> <p>For more information on how to manage cookies, you can visit the \"Help\" section of your browser or visit <a style=\"display:inline;\" href=\"http://www.allaboutcookies.org\">www.allaboutcookies.org</a></p><h2>Updates to this Cookie Policy</h2> <p>We may update this Cookie Policy from time to time to reflect changes in technology, legal requirements, or our business practices. We encourage you to review this page periodically for the latest information on our use of cookies.</p><h2>Contact Us</h2> <p>If you have any questions about this Cookie Policy or our use of cookies, please contact us at <b>our contact page!</b>.</p><p>By continuing to use our Website, you acknowledge that you have read and understood this Cookie Policy and consent to the use of cookies as described herein.</p>'),
(1234512345, 'What\'s new in version 1.0.3', 'Get updates on what is new on the app and website.'),
(1234912345, 'We are filled with excitement as we introduce our app', '<h1>Introducing Our Cross-Device Sharing App: Seamlessly Connect and Collaborate</h1><h2>File Transfer: Effortless Sharing and Access</h2><p>Gone are the days of relying on clunky cables or emailing files to yourself. Our app provides a seamless file transfer experience, enabling you to effortlessly share files of any format and size across your devices. Whether it\'s a document, presentation, spreadsheet, or media file, simply select the file, and voila! Your file will be instantly available for download and use on the receiving device. Say goodbye to manual transfers and hello to seamless connectivity.</p><h2>Continuation Across Devices: Seamless Workflow</h2><p>We believe that technology should adapt to your needs, not the other way around. Our app ensures that you can seamlessly continue your work, browsing, or media consumption across different devices. Start reading an article on your smartphone during your commute, and effortlessly pick up where you left off on your tablet or laptop when you reach your destination. Our app intelligently syncs your progress, making sure you\'re always in sync across all your devices.</p><h2>Code Sharing: Empowering Collaboration</h2><p>Our app recognizes the importance of collaboration in today\'s fast-paced digital landscape. Whether you\'re a developer, a student, or an aspiring entrepreneur, the ability to share and collaborate on code and data in real-time is crucial. Our code and data sharing feature allows you to effortlessly share code snippets, projects, and scripts with your self, peers or teammates across all devices. Simply select the code you wish to share, choose your file, and you can instantly access and collaborate on the code, making simultaneous development and debugging a breeze.</p><h2>Picture Sharing: Preserve and Share Memories</h2><p>We understand the importance of capturing and sharing special moments. Our picture sharing feature allows you to seamlessly transfer photos between devices. Whether you\'ve taken a stunning picture on your smartphone or captured a beautiful moment on your DSLR camera, our app enables you to effortlessly share those pictures with your other devices. Relive your memories and share them with your loved ones, all at the touch of a button.</p><h2>Security and Privacy: Your Data, Your Control</h2><p>We understand the importance of data security and privacy. Our app employs state-of-the-art encryption algorithms and secure protocols to ensure that your shared information remains confidential. We respect your privacy and provide you with full control over your data, allowing you to manage permissions and revoke access at any time.</p><p>In today\'s interconnected world, the ability to seamlessly share and collaborate across devices is vital. With our sharing-with-other-device app, we aim to empower you with the tools to effortlessly connect, collaborate, and share information, boosting your productivity and simplifying your digital life.</p><p>Join us on this exciting journey as we redefine cross-device sharing and take your digital experience to new heights. Download our app today and unlock a world of seamless connectivity and collaboration. Together, let\'s shape the future of sharing.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `traffic`
--

CREATE TABLE `traffic` (
  `id` int(11) NOT NULL,
  `fromwhichwebsite` varchar(6) NOT NULL,
  `countt` int(11) NOT NULL DEFAULT 0,
  `comment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traffic`
--

INSERT INTO `traffic` (`id`, `fromwhichwebsite`, `countt`, `comment`) VALUES
(1, 'fb', 0, 'facebook'),
(2, 'ig', 0, 'instagram'),
(3, 'tw', 0, 'twitter'),
(4, 'pin', 0, 'pinterest'),
(5, 'ggl', 0, 'google'),
(6, 'dis', 0, 'discord');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(29) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(38) NOT NULL,
  `id` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `premiunm` tinyint(1) NOT NULL DEFAULT 0,
  `premuimType` varchar(7) NOT NULL DEFAULT 'free'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `id`, `datetime`, `premiunm`, `premuimType`) VALUES
('toballz', '9260710aa57b6d58e065008f06f5c4ea', 'toballz@yahoo.com', '57442', '2023-06-23 17:44:24', 16, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `usersdatas`
--

CREATE TABLE `usersdatas` (
  `idr` int(11) NOT NULL,
  `userfrom` varchar(20) NOT NULL,
  `dataJson` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'one json {} data ' CHECK (json_valid(`dataJson`)),
  `HashUserfromJsonDataH` varchar(33) NOT NULL,
  `dateInsertModify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersdatas`
--

INSERT INTO `usersdatas` (`idr`, `userfrom`, `dataJson`, `HashUserfromJsonDataH`, `dateInsertModify`) VALUES
(36, '57442', '{\"StrType\":\"Text\",\"StrVal\":\"bhfsdg\"}', 'b664e356c8fae13d7ffc4fed2f5319d2a', '2024-01-07 18:57:56'),
(53, '57442', '{\"StrType\":\"Text\",\"StrVal\":\"as\"}', '357c9a7b300d260adefaf8d633e3767ae', '2024-01-07 18:57:50'),
(55, '57442', '{\"StrType\":\"Text\",\"StrVal\":\"asfsd\"}', '01b17cdce2c7f5a14f6ec2e6bd845c38e', '2024-01-07 18:57:49'),
(81, '57442', '{\"StrType\":\"Text\",\"StrVal\":\"emailTextController.text = snapShotData[\'email\'];\"}', 'ffb3095cde14767fd8d819f3ac34a8afd', '2024-01-07 19:04:44'),
(87, '57442', '{\"StrType\":\"Link\",\"StrVal\":\"https://console.firebase.google.com/u/0/project/fodonnshare/database/fodonnshare-default-rtdb/data/~2Fuseraddednewdata\"}', 'd87ba3e54915f4d90b49156041c767ea3', '2024-01-07 20:28:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discuss`
--
ALTER TABLE `discuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traffic`
--
ALTER TABLE `traffic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usersdatas`
--
ALTER TABLE `usersdatas`
  ADD PRIMARY KEY (`idr`),
  ADD UNIQUE KEY `HashUserfromJsonDataH` (`HashUserfromJsonDataH`),
  ADD KEY `idr` (`idr`),
  ADD KEY `userfrom_userid` (`userfrom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traffic`
--
ALTER TABLE `traffic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usersdatas`
--
ALTER TABLE `usersdatas`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usersdatas`
--
ALTER TABLE `usersdatas`
  ADD CONSTRAINT `userfrom_userid` FOREIGN KEY (`userfrom`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
