<?php
@session_start();

/*=========================
   PAGE NAME (Routing simple)
=========================*/
$full_name  = $_SERVER['PHP_SELF'];
$name_array = explode('/', $full_name);
$count      = count($name_array);
$page_name  = $name_array[$count - 1];

if     ($page_name == 'index.php')        { $namepage = "Home"; }
elseif ($page_name == 'about.php')        { $namepage = "About"; }
elseif ($page_name == 'services.php')     { $namepage = "Services"; }
elseif ($page_name == 'testimonials.php') { $namepage = "Testimonials"; }
elseif ($page_name == 'projects.php')     { $namepage = "Projects"; }
elseif ($page_name == 'thank-you.php')    { $namepage = "Thank You"; }
elseif ($page_name == '404.php')          { $namepage = "Not Found"; }
elseif ($page_name == 'contact.php')      { $namepage = "Contact Us"; }
else                                      { $namepage = ucfirst(str_replace('.php', '', $page_name)); }

/*=========================
   INFO GENERAL — 24 HOURS GUZMAN LOCKSMITH LLC
=========================*/
$Company     = "24 HOURS GUZMAN LOCKSMITH LLC";
$Customer    = "Susan Guzmán";
$Domain      = "https://24hoursguzmanlocksmithllc.com/";
$BaseURL     = $Domain;
$Address     = "5143 S John Young Pkwy ste 401 Orlando, FL 32839, EE. UU";

$PhoneName   = "Main";
$Phone       = "407-398-2205";

/* --- Tel Ref --- */
function telRef($p) {
  $clean = str_replace(str_split('()-/\\:?"<>|., '), '', $p);
  return "tel:" . $clean;
}
$PhoneRef = telRef($Phone);

/*=========================
   WHATSAPP
=========================*/
$whatsapp_num = preg_replace('/\D+/', '', $Phone);
if (strpos($whatsapp_num, '1') !== 0) { $whatsapp_num = '1' . $whatsapp_num; }

$whatsapp = "https://api.whatsapp.com/send?phone=$whatsapp_num&text=Hello!%20I%20would%20like%20to%20request%20a%20locksmith%20service.";

/*=========================
   CORREO (pendiente)
=========================*/
$Mail    = "pending@email.com"; // ← Se actualizará cuando lo entregue
$MailRef = "mailto:" . $Mail;

/*=========================
   MESSAGES & DETAILS
=========================*/
$Estimates     = "Estimates available with an additional fee";
$Experience    = "10 Years of Experience";
$Coverage      = "We Cover up to 70 Miles Around Orlando, FL";
$Schedule      = "24 Hours a Day, 7 Days a Week";
$Payment       = "Zelle, Credit Card (3.5% fee)";
$BilingualNote = "Bilingual Attention: Yes";
$Licensed      = "Fully Licensed & Insured";

/*=========================
   ÁREAS DE COBERTURA
=========================*/
$Areas = [
  "Orlando",
  "Kissimmee",
  "Winter Park",
  "Altamonte Springs",
  "Apopka",
  "Lake Buena Vista",
  "Sanford",
  "Oviedo",
  "Clermont",
  "FL"
];

/*=========================
   REDES
=========================*/
$facebook  = "#";
$google    = "#";

/*=========================
   SLOGANS — HOME HERO
=========================*/
$Phrase = array(
  "Fast, Reliable, and Professional Locksmith Services — Available 24/7.",
  "Locked Out? We Are One Call Away Anytime, Anywhere.",
  "Your Trusted Residential, Commercial, and Automotive Locksmith.",
  "Safety, Precision, and Expertise in Every Service.",
  "10 Years of Locksmith Experience Serving Orlando & Surrounding Areas."
);

/*=========================
   HOME SECTION
=========================*/
$Home = array(
  "Welcome to 24 HOURS GUZMAN LOCKSMITH LLC — Your fast-response locksmith available 24/7 across Orlando and surrounding areas. We specialize in residential, commercial, and automotive locksmith services with full licensing and insurance for your peace of mind.",
  "With over 10 years of experience, we ensure high-quality service, immediate response, and bilingual attention. From home lockouts to business security and vehicle unlocking, we deliver professional, secure, and trustworthy solutions whenever you need them."
);

/*=========================
   ABOUT SECTION
=========================*/
$About = array(
  "24 HOURS GUZMAN LOCKSMITH LLC is a fully licensed and insured locksmith company with 10 years of dedicated experience serving Orlando, Florida. Led by Susan Guzmán, our mission is to provide fast, professional, and secure solutions for homes, businesses, and vehicles.",
  "We operate 24/7, offering bilingual customer care and extensive coverage across a 70-mile radius. Whether it’s an emergency lockout or a planned security upgrade, our team guarantees reliable service, modern tools, and expert results."
);

/*=========================
   MISSION & VISION
=========================*/
$Mission = "To deliver reliable, fast, and professional locksmith services with complete transparency, safety, and customer-focused solutions across residential, commercial, and automotive needs.";

$Vision  = "To become Orlando's most trusted locksmith provider, recognized for excellence, safety, innovation, and exceptional service available 24 hours a day.";

/*=========================
   SERVICIOS
=========================*/
$SN = $SD = $ExSD = array();

/* --- Residential --- */
$SN[1] = "Residential Locksmith Services";
$SD[1] = "Professional lock installation, home unlocking services, lock repair, rekeying, and security solutions for homeowners across Orlando and surrounding areas.";

/* --- Commercial --- */
$SN[2] = "Commercial Locksmith Services";
$SD[2] = "Reliable locksmith services for businesses, offices, and commercial properties including lock systems, rekeying, unlocking, and security upgrades.";

/* --- Automotive --- */
$SN[3] = "Automotive Locksmith Services";
$SD[3] = "Fast car unlocking, emergency lockout assistance, key services, and on-site solutions for vehicles of all types.";

/*=========================
   OTROS SERVICIOS
=========================*/
$OtherServices = array(
  "Lock Installation",
  "Rekeying Services",
  "Lock Repair",
  "Emergency Unlocking",
  "Car Key Services",
  "Business Lockout Assistance"
);

/*=========================
   BADGES
=========================*/
$Badges = array(
  $Estimates,
  $Experience,
  $Schedule,
  $Coverage,
  $Licensed,
  $BilingualNote
);

/*=========================
   SEO EXTRACTS
=========================*/
if (strlen($About[0]) > 10) { $ExAbout = substr($About[0], 0, 145) . '...'; }
if (strlen($Home[0])  > 10) { $ExHome  = substr($Home[0],  0, 95)  . '...'; }

for ($i = 1; $i <= 3; $i++) {
  if (isset($SD[$i]) && strlen($SD[$i]) > 10) {
    $limit = 130;
    $ExSD[$i] = substr($SD[$i], 0, $limit) . '...';
  }
}

/*=========================
   PAYMENT METHODS
=========================*/
$PaymentMethods = array("Zelle", "Credit Card (3.5% fee)");

/*=========================
   EXPERIENCE YEARS
=========================*/
$ExperienceYears = 10;

/*=========================
   CSS VARS
=========================*/
$BrandColors = [
  'primary'   => '#1E3A5F',
  'secondary' => '#D3A625',
  'accent'    => '#F5F5F5',
  'neutral'   => '#E8E8E8',
  'white'     => '#FFFFFF'
];

$BrandCSSVars = sprintf(
  ':root{--brand-primary:%s;--brand-secondary:%s;--brand-white:%s;}',
  $BrandColors["primary"],
  $BrandColors["secondary"],
  $BrandColors["white"]
);
?>
