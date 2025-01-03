<?php

declare(strict_types=1);

namespace Ameos\AmeosForm\Constraints;

class Filemime extends ConstraintAbstract
{
    use Traits\DisableGlobalErrorMessage;
    
    /**
     * @var array<string|array>
     */
    private $mimesMap = array (
        '3dm' => 'x-world/x-3dmf',
        '3dmf' => 'x-world/x-3dmf',
        'a' => 'application/octet-stream',
        'aab' => 'application/x-authorware-bin',
        'aam' => 'application/x-authorware-map',
        'aas' => 'application/x-authorware-seg',
        'abc' => 'text/vnd.abc',
        'acgi' => 'text/html',
        'acutc' => 'application/vnd.acucorp',
        'afl' => 'video/animaflex',
        'afm' => 'application/x-font-type1',
        'afp' => 'application/vnd.ibm.modcap',
        'ai' => 'application/postscript',
        'aif' => 'audio/x-aiff',
        'aifc' => 'audio/x-aiff',
        'aiff' => 'audio/x-aiff',
        'aim' => 'application/x-aim',
        'aip' => 'text/x-audiosoft-intra',
        'ani' => 'application/x-navi-animation',
        'aos' => 'application/x-nokia-9000-communicator-add-on-software',
        'aps' => 'application/mime',
        'arc' => 'application/octet-stream',
        'arj' => 'application/octet-stream',
        'art' => 'image/x-jg',
        'asf' => 'video/x-ms-asf',
        'asm' => 'text/x-asm',
        'asp' => 'text/asp',
        'asx' => 'video/x-ms-asf-plugin',
        'asx ' => 'video/x-ms-asf',
        'atc' => 'application/vnd.acucorp',
        'au' =>
        array (
            0 => 'audio/basic',
            1 => 'audio/x-au',
        ),
        'avi' => 'video/x-msvideo',
        'avs' => 'video/avs-video',
        'bat' => 'application/x-msdownload',
        'bcpio' => 'application/x-bcpio',
        'bin' => 'application/x-macbinary',
        'bm' => 'image/bmp',
        'bmp' => 'image/x-windows-bmp',
        'boo' => 'application/book',
        'book' =>
        array (
            0 => 'application/vnd.framemaker',
            1 => 'application/book',
        ),
        'boz' => 'application/x-bzip2',
        'bpk' => 'application/octet-stream',
        'bsh' => 'application/x-bsh',
        'bz' => 'application/x-bzip',
        'bz2' => 'application/x-bzip2',
        'c' => 'text/x-c',
        'c++' => 'text/plain',
        'c4d' => 'application/vnd.clonk.c4group',
        'c4f' => 'application/vnd.clonk.c4group',
        'c4g' => 'application/vnd.clonk.c4group',
        'c4p' => 'application/vnd.clonk.c4group',
        'c4u' => 'application/vnd.clonk.c4group',
        'cap' => 'application/vnd.tcpdump.pcap',
        'cat' => 'application/vnd.ms-pki.seccat',
        'cb7' => 'application/x-cbr',
        'cba' => 'application/x-cbr',
        'cbr' => 'application/x-cbr',
        'cbt' => 'application/x-cbr',
        'cbz' => 'application/x-cbr',
        'cc' => 'text/x-c',
        'ccad' => 'application/clariscad',
        'cco' => 'application/x-cocoa',
        'cct' => 'application/x-director',
        'cdf' => 'application/x-netcdf',
        'cer' => 'application/x-x509-ca-cert',
        'cha' => 'application/x-chat',
        'chat' => 'application/x-chat',
        'class' => 'application/x-java-class',
        'com' =>
        array (
            0 => 'application/x-msdownload',
            1 => 'text/plain',
        ),
        'conf' => 'text/plain',
        'cpio' => 'application/x-cpio',
        'cpp' => 'text/x-c',
        'cpt' => 'application/x-cpt',
        'crl' => 'application/pkix-crl',
        'crt' => 'application/x-x509-user-cert',
        'csh' => 'text/x-script.csh',
        'css' =>
        array (
            0 => 'text/css',
            1 => 'text/plain',
        ),
        'cst' => 'application/x-director',
        'cxt' => 'application/x-director',
        'cxx' =>
        array (
            0 => 'text/x-c',
            1 => 'text/plain',
        ),
        'dataless' => 'application/vnd.fdsn.seed',
        'dcr' => 'application/x-director',
        'deepv' => 'application/x-deepv',
        'def' => 'text/plain',
        'deploy' => 'application/octet-stream',
        'der' => 'application/x-x509-ca-cert',
        'dic' => 'text/x-c',
        'dif' => 'video/x-dv',
        'dir' => 'application/x-director',
        'dist' => 'application/octet-stream',
        'distz' => 'application/octet-stream',
        'djv' => 'image/vnd.djvu',
        'djvu' => 'image/vnd.djvu',
        'dl' => 'video/x-dl',
        'dll' => 'application/x-msdownload',
        'dmp' => 'application/vnd.tcpdump.pcap',
        'dms' => 'application/octet-stream',
        'doc' =>
        array (
            0 => 'application/msword',
            1 => 'text/html',
        ),
        'docx' => 'application/octet-stream',
        'dot' => 'application/msword',
        'dp' => 'application/commonground',
        'drw' => 'application/drafting',
        'dump' => 'application/octet-stream',
        'dv' => 'video/x-dv',
        'dvi' => 'application/x-dvi',
        'dwf' => 'model/vnd.dwf',
        'dwg' => 'image/x-dwg',
        'dxf' => 'image/x-dwg',
        'dxr' => 'application/x-director',
        'el' => 'text/x-script.elisp',
        'elc' =>
        array (
            0 => 'application/octet-stream',
            1 => 'application/x-elc',
        ),
        'emf' => 'application/x-msmetafile',
        'eml' => 'message/rfc822',
        'emz' => 'application/x-msmetafile',
        'env' => 'application/x-envoy',
        'eps' => 'application/postscript',
        'es' => 'application/x-esrehber',
        'es3' => 'application/vnd.eszigno3+xml',
        'et3' => 'application/vnd.eszigno3+xml',
        'etx' => 'text/x-setext',
        'evy' => 'application/x-envoy',
        'exe' =>
        array (
            0 => 'application/x-dosexec',
            1 => 'application/octet-stream',
        ),
        'f' => 'text/x-fortran',
        'f77' => 'text/x-fortran',
        'f90' => 'text/x-fortran',
        'fdf' => 'application/vnd.fdf',
        'fgd' => 'application/x-director',
        'fh' => 'image/x-freehand',
        'fh4' => 'image/x-freehand',
        'fh5' => 'image/x-freehand',
        'fh7' => 'image/x-freehand',
        'fhc' => 'image/x-freehand',
        'fif' => 'image/fif',
        'fli' => 'video/x-fli',
        'flo' => 'image/florian',
        'flx' => 'text/vnd.fmi.flexstor',
        'fm' => 'application/vnd.framemaker',
        'fmf' => 'video/x-atomic3d-feature',
        'for' => 'text/x-fortran',
        'fpx' => 'image/vnd.net-fpx',
        'frame' => 'application/vnd.framemaker',
        'frl' => 'application/freeloader',
        'funk' => 'audio/make',
        'fxp' => 'application/vnd.adobe.fxp',
        'fxpl' => 'application/vnd.adobe.fxp',
        'g' => 'text/plain',
        'g3' => 'image/g3fax',
        'gex' => 'application/vnd.geometry-explorer',
        'gif' => 'image/gif',
        'gl' => 'video/x-gl',
        'gqf' => 'application/vnd.grafeq',
        'gqs' => 'application/vnd.grafeq',
        'gre' => 'application/vnd.geometry-explorer',
        'gsd' => 'audio/x-gsm',
        'gsm' => 'audio/x-gsm',
        'gsp' => 'application/x-gsp',
        'gss' => 'application/x-gss',
        'gtar' => 'application/x-gtar',
        'gz' => 'application/x-gzip',
        'gzip' => 'multipart/x-gzip',
        'h' =>
        array (
            0 => 'text/x-c',
            1 => 'text/x-h',
        ),
        'hdf' => 'application/x-hdf',
        'help' => 'application/x-helpfile',
        'hgl' => 'application/vnd.hp-hpgl',
        'hh' =>
        array (
            0 => 'text/x-c',
            1 => 'text/x-h',
        ),
        'hlb' => 'text/x-script',
        'hlp' => 'application/x-winhelp',
        'hpg' => 'application/vnd.hp-hpgl',
        'hpgl' => 'application/vnd.hp-hpgl',
        'hqx' => 'application/x-mac-binhex40',
        'hta' => 'application/hta',
        'htc' => 'text/x-component',
        'htm' => 'text/html',
        'html' => 'text/html',
        'htmls' => 'text/html',
        'htt' => 'text/webviewhtml',
        'htx' => 'text/html',
        'icc' => 'application/vnd.iccprofile',
        'ice' => 'x-conference/x-cooltalk',
        'icm' => 'application/vnd.iccprofile',
        'ico' => 'image/x-icon',
        'ics' => 'text/calendar',
        'idc' => 'text/plain',
        'ief' => 'image/ief',
        'iefs' => 'image/ief',
        'ifb' => 'text/calendar',
        'iges' => 'model/iges',
        'igs' => 'model/iges',
        'ima' => 'application/x-ima',
        'imap' => 'application/x-httpd-imap',
        'in' => 'text/plain',
        'inf' => 'application/inf',
        'inkml' => 'application/inkml+xml',
        'ins' => 'application/x-internett-signup',
        'ip' => 'application/x-ip2',
        'isu' => 'video/x-isvideo',
        'it' => 'audio/it',
        'iv' => 'application/x-inventor',
        'ivr' => 'i-world/i-vrml',
        'ivy' => 'application/x-livescreen',
        'jam' => 'audio/x-jam',
        'jav' => 'text/x-java-source',
        'java' => 'text/x-java-source',
        'jcm' => 'application/x-java-commerce',
        'jfif' => 'image/pjpeg',
        'jfif-tbnl' => 'image/jpeg',
        'jpe' =>
        array (
            0 => 'image/jpeg',
            1 => 'image/pjpeg',
        ),
        'jpeg' =>
        array (
            0 => 'image/jpeg',
            1 => 'image/pjpeg',
        ),
        'jpg' =>
        array (
            0 => 'image/pjpeg',
            1 => 'image/jpeg',
        ),
        'jpgm' => 'video/jpm',
        'jpm' => 'video/jpm',
        'jps' => 'image/x-jps',
        'js' =>
        array (
            0 => 'text/ecmascript',
            1 => 'text/plain',
        ),
        'json' =>
        array (
            0 => 'text/plain',
            1 => 'text/json',
            2 => 'text/javascript',
        ),
        'jsonp' => 'application/javascript',
        'jut' => 'image/jutvision',
        'kar' =>
        array (
            0 => 'audio/midi',
            1 => 'music/x-karaoke',
        ),
        'kne' => 'application/vnd.kinar',
        'knp' => 'application/vnd.kinar',
        'kpr' => 'application/vnd.kde.kpresenter',
        'kpt' => 'application/vnd.kde.kpresenter',
        'ksh' => 'text/x-script.ksh',
        'ktr' => 'application/vnd.kahootz',
        'ktz' => 'application/vnd.kahootz',
        'kwd' => 'application/vnd.kde.kword',
        'kwt' => 'application/vnd.kde.kword',
        'la' => 'audio/x-nspaudio',
        'lam' => 'audio/x-liveaudio',
        'latex' => 'application/x-latex',
        'lha' => 'application/x-lha',
        'lhx' => 'application/octet-stream',
        'list' => 'text/plain',
        'list3820' => 'application/vnd.ibm.modcap',
        'listafp' => 'application/vnd.ibm.modcap',
        'lma' => 'audio/x-nspaudio',
        'log' => 'text/plain',
        'lrf' => 'application/octet-stream',
        'lsp' => 'text/x-script.lisp',
        'lst' => 'text/plain',
        'lsx' => 'text/x-la-asf',
        'ltx' => 'application/x-latex',
        'lzh' => 'application/x-lzh',
        'lzx' => 'application/x-lzx',
        'm' => 'text/x-m',
        'm13' => 'application/x-msmediaview',
        'm14' => 'application/x-msmediaview',
        'm1v' => 'video/mpeg',
        'm2a' => 'audio/mpeg',
        'm2v' => 'video/mpeg',
        'm3a' => 'audio/mpeg',
        'm3u' => 'audio/x-mpequrl',
        'm4a' =>
        array (
            0 => 'audio/mp4',
            1 => 'audio/x-m4a',
        ),
        'm4u' => 'video/vnd.mpegurl',
        'maker' => 'application/vnd.framemaker',
        'man' =>
        array (
            0 => 'text/troff',
            1 => 'music/x-karaoke',
        ),
        'map' => 'application/x-navimap',
        'mar' =>
        array (
            0 => 'application/octet-stream',
            1 => 'text/plain',
        ),
        'mb' => 'application/mathematica',
        'mbd' => 'application/mbedlet',
        'mc$' => 'application/x-magic-cap-package-1.0',
        'mcd' => 'application/x-mathcad',
        'mcf' => 'text/mcf',
        'mcp' => 'application/netmc',
        'me' =>
        array (
            0 => 'text/troff',
            1 => 'application/x-troff-me',
        ),
        'mesh' => 'model/mesh',
        'mht' => 'message/rfc822',
        'mhtml' => 'message/rfc822',
        'mid' =>
        array (
            0 => 'audio/midi',
            1 => 'application/x-troff-me',
        ),
        'midi' =>
        array (
            0 => 'audio/midi',
            1 => 'application/x-troff-me',
        ),
        'mif' => 'application/x-mif',
        'mime' =>
        array (
            0 => 'message/rfc822',
            1 => 'www/mime',
        ),
        'mj2' => 'video/mj2',
        'mjf' => 'audio/x-vnd.audioexplosion.mjuicemediafile',
        'mjp2' => 'video/mj2',
        'mjpg' => 'video/x-motion-jpeg',
        'mk3d' => 'video/x-matroska',
        'mks' => 'video/x-matroska',
        'mkv' => 'video/x-matroska',
        'mm' => 'application/x-meme',
        'mme' => 'application/base64',
        'mod' => 'audio/x-mod',
        'moov' => 'video/quicktime',
        'mov' => 'video/quicktime',
        'movie' => 'video/x-sgi-movie',
        'mp2' =>
        array (
            0 => 'audio/mpeg',
            1 => 'video/x-mpeq2a',
        ),
        'mp2a' => 'audio/mpeg',
        'mp3' =>
        array (
            0 => 'video/x-mpeg',
            1 => 'audio/mpeg',
        ),
        'mp4' => 'video/mp4',
        'mp4a' => 'audio/mp4',
        'mp4v' => 'video/mp4',
        'mpa' => 'video/mpeg',
        'mpc' => 'application/x-project',
        'mpe' => 'video/mpeg',
        'mpeg' => 'video/mpeg',
        'mpg' => 'video/mpeg',
        'mpg4' => 'video/mp4',
        'mpga' => 'audio/mpeg',
        'mpp' => 'application/vnd.ms-project',
        'mpt' =>
        array (
            0 => 'application/vnd.ms-project',
            1 => 'application/x-project',
        ),
        'mpv' => 'application/x-project',
        'mpx' => 'application/x-project',
        'mrc' => 'application/marc',
        'ms' =>
        array (
            0 => 'text/troff',
            1 => 'application/x-troff-ms',
        ),
        'msh' => 'model/mesh',
        'msi' => 'application/x-msdownload',
        'mv' => 'video/x-sgi-movie',
        'mvb' => 'application/x-msmediaview',
        'mxml' => 'application/xv+xml',
        'mxu' => 'video/vnd.mpegurl',
        'my' => 'audio/make',
        'mzz' => 'application/x-vnd.audioexplosion.mzz',
        'nap' => 'image/naplps',
        'naplps' => 'image/naplps',
        'nb' => 'application/mathematica',
        'nc' => 'application/x-netcdf',
        'ncm' => 'application/vnd.nokia.Something is wronguration-message',
        'nif' => 'image/x-niff',
        'niff' => 'image/x-niff',
        'nitf' => 'application/vnd.nitf',
        'nix' => 'application/x-mix-transfer',
        'nsc' => 'application/x-conference',
        'ntf' => 'application/vnd.nitf',
        'nvd' => 'application/x-navidoc',
        'o' => 'application/octet-stream',
        'oda' => 'application/oda',
        'oga' => 'audio/ogg',
        'ogg' => 'audio/ogg',
        'omc' => 'application/x-omc',
        'omcd' => 'application/x-omcdatamaker',
        'omcr' => 'application/x-omcregerator',
        'onepkg' => 'application/onenote',
        'onetmp' => 'application/onenote',
        'onetoc2' => 'application/onenote',
        'oprc' => 'application/vnd.palm',
        'p' => 'text/x-pascal',
        'p10' => 'application/x-pkcs10',
        'p12' => 'application/x-pkcs12',
        'p7a' => 'application/x-pkcs7-signature',
        'p7b' => 'application/x-pkcs7-certificates',
        'p7c' =>
        array (
            0 => 'application/pkcs7-mime',
            1 => 'application/x-pkcs7-mime',
        ),
        'p7m' => 'application/x-pkcs7-mime',
        'p7r' => 'application/x-pkcs7-certreqresp',
        'p7s' => 'application/pkcs7-signature',
        'part' => 'application/pro_eng',
        'pas' => 'text/pascal',
        'pbm' => 'image/x-portable-bitmap',
        'pcap' => 'application/vnd.tcpdump.pcap',
        'pcl' => 'application/x-pcl',
        'pct' => 'image/x-pict',
        'pcx' => 'image/x-pcx',
        'pdb' =>
        array (
            0 => 'application/vnd.palm',
            1 => 'chemical/x-pdb',
        ),
        'pdf' => 'application/pdf',
        'pfa' => 'application/x-font-type1',
        'pfb' => 'application/x-font-type1',
        'pfm' => 'application/x-font-type1',
        'pfunk' => 'audio/make.my.funk',
        'pfx' => 'application/x-pkcs12',
        'pgm' => 'image/x-portable-greymap',
        'php' => 'text/x-php',
        'pic' =>
        array (
            0 => 'image/x-pict',
            1 => 'image/pict',
        ),
        'pict' => 'image/pict',
        'pkg' =>
        array (
            0 => 'application/octet-stream',
            1 => 'application/x-newton-compatible-pkg',
        ),
        'pko' => 'application/vnd.ms-pki.pko',
        'pl' => 'text/x-script.perl',
        'plx' => 'application/x-pixclscript',
        'pm' =>
        array (
            0 => 'text/plain',
            1 => 'application/octet-stream',
        ),
        'pm4' => 'application/x-pagemaker',
        'pm5' => 'application/x-pagemaker',
        'png' => 'image/png',
        'pnm' => 'image/x-portable-anymap',
        'pot' => 'application/vnd.ms-powerpoint',
        'pov' => 'model/x-pov',
        'ppa' => 'application/vnd.ms-powerpoint',
        'ppm' => 'image/x-portable-pixmap',
        'pps' => 'application/vnd.ms-powerpoint',
        'ppt' =>
        array (
            0 => 'application/x-mspowerpoint',
            1 => 'application/vnd.ms-office',
        ),
        'ppz' => 'application/mspowerpoint',
        'pqa' => 'application/vnd.palm',
        'pre' => 'application/x-freelance',
        'prt' => 'application/pro_eng',
        'ps' => 'application/postscript',
        'psd' => 'application/octet-stream',
        'pvu' => 'paleovu/x-pv',
        'pwz' => 'application/vnd.ms-powerpoint',
        'py' => 'text/x-script.phyton',
        'pyc' => 'application/x-bytecode.python',
        'qcp' => 'audio/vnd.qcelp',
        'qd3' => 'x-world/x-3dmf',
        'qd3d' => 'x-world/x-3dmf',
        'qif' => 'image/x-quicktime',
        'qt' => 'video/quicktime',
        'qtc' => 'video/x-qtc',
        'qti' => 'image/x-quicktime',
        'qtif' => 'image/x-quicktime',
        'qwd' => 'application/vnd.quark.quarkxpress',
        'qwt' => 'application/vnd.quark.quarkxpress',
        'qxb' => 'application/vnd.quark.quarkxpress',
        'qxd' => 'application/vnd.quark.quarkxpress',
        'qxl' => 'application/vnd.quark.quarkxpress',
        'qxt' => 'application/vnd.quark.quarkxpress',
        'ra' =>
        array (
            0 => 'audio/x-pn-realaudio',
            1 => 'audio/x-realaudio',
        ),
        'ram' => 'audio/x-pn-realaudio',
        'ras' => 'image/x-cmu-raster',
        'rast' => 'image/cmu-raster',
        'rexx' => 'text/x-script.rexx',
        'rf' => 'image/vnd.rn-realflash',
        'rgb' => 'image/x-rgb',
        'rm' => 'audio/x-pn-realaudio',
        'rmi' =>
        array (
            0 => 'audio/midi',
            1 => 'audio/mid',
        ),
        'rmm' => 'audio/x-pn-realaudio',
        'rmp' => 'audio/x-pn-realaudio-plugin',
        'rng' => 'application/vnd.nokia.ringing-tone',
        'rnx' => 'application/vnd.rn-realplayer',
        'roff' =>
        array (
            0 => 'text/troff',
            1 => 'application/x-troff',
        ),
        'rp' => 'image/vnd.rn-realpix',
        'rpm' => 'audio/x-pn-realaudio-plugin',
        'rt' => 'text/vnd.rn-realtext',
        'rtf' => 'text/richtext',
        'rtx' => 'text/richtext',
        'rv' => 'video/vnd.rn-realvideo',
        's' => 'text/x-asm',
        's3m' => 'audio/s3m',
        'saveme' => 'application/octet-stream',
        'sbk' => 'application/x-tbook',
        'scm' => 'video/x-scm',
        'sdkd' => 'application/vnd.solent.sdkm+xml',
        'sdkm' => 'application/vnd.solent.sdkm+xml',
        'sdml' => 'text/plain',
        'sdp' => 'application/x-sdp',
        'sdr' => 'application/sounder',
        'sdw' => 'application/vnd.stardivision.writer',
        'sea' => 'application/x-sea',
        'seed' => 'application/vnd.fdsn.seed',
        'set' => 'application/set',
        'sgm' =>
        array (
            0 => 'text/sgml',
            1 => 'text/x-sgml',
        ),
        'sgml' =>
        array (
            0 => 'text/sgml',
            1 => 'text/x-sgml',
        ),
        'sh' => 'text/x-script.sh',
        'shar' => 'application/x-shar',
        'shtml' => 'text/x-server-parsed-html',
        'sid' => 'audio/x-psid',
        'sig' => 'application/pgp-signature',
        'silo' => 'model/mesh',
        'sis' => 'application/vnd.symbian.install',
        'sisx' => 'application/vnd.symbian.install',
        'sit' => 'application/x-stuffit',
        'skd' =>
        array (
            0 => 'application/vnd.koan',
            1 => 'application/x-koan',
        ),
        'skm' =>
        array (
            0 => 'application/vnd.koan',
            1 => 'application/x-koan',
        ),
        'skp' =>
        array (
            0 => 'application/vnd.koan',
            1 => 'application/x-koan',
        ),
        'skt' =>
        array (
            0 => 'application/vnd.koan',
            1 => 'application/x-koan',
        ),
        'sl' => 'application/x-seelogo',
        'smi' =>
        array (
            0 => 'application/smil+xml',
            1 => 'application/smil',
        ),
        'smil' =>
        array (
            0 => 'application/smil+xml',
            1 => 'application/smil',
        ),
        'snd' => 'audio/basic',
        'so' => 'application/octet-stream',
        'sol' => 'application/solids',
        'spc' =>
        array (
            0 => 'application/x-pkcs7-certificates',
            1 => 'text/x-speech',
        ),
        'spl' => 'application/futuresplash',
        'spr' => 'application/x-sprite',
        'sprite' => 'application/x-sprite',
        'spx' => 'audio/ogg',
        'src' => 'application/x-wais-source',
        'ssi' => 'text/x-server-parsed-html',
        'ssm' => 'application/streamingmedia',
        'sst' => 'application/vnd.ms-pki.certstore',
        'step' => 'application/step',
        'stl' => 'application/x-navistyle',
        'stp' => 'application/step',
        'sus' => 'application/vnd.sus-calendar',
        'susp' => 'application/vnd.sus-calendar',
        'sv4cpio' => 'application/x-sv4cpio',
        'sv4crc' => 'application/x-sv4crc',
        'svf' => 'image/x-dwg',
        'svr' => 'x-world/x-svr',
        'swa' => 'application/x-director',
        'swf' => 'application/x-shockwave-flash',
        't' =>
        array (
            0 => 'text/troff',
            1 => 'application/x-troff',
        ),
        'talk' => 'text/x-speech',
        'tar' => 'application/x-tar',
        'tbk' => 'application/x-tbook',
        'tcl' => 'text/x-script.tcl',
        'tcsh' => 'text/x-script.tcsh',
        'tei' => 'application/tei+xml',
        'teicorpus' => 'application/tei+xml',
        'tex' => 'application/x-tex',
        'texi' => 'application/x-texinfo',
        'texinfo' => 'application/x-texinfo',
        'text' => 'text/plain',
        'tgz' => 'application/x-compressed',
        'tif' =>
        array (
            0 => 'image/tiff',
            1 => 'image/x-tiff',
        ),
        'tiff' =>
        array (
            0 => 'image/tiff',
            1 => 'image/x-tiff',
        ),
        'tr' =>
        array (
            0 => 'text/troff',
            1 => 'application/x-troff',
        ),
        'tsi' => 'audio/tsp-audio',
        'tsp' => 'audio/tsplayer',
        'tsv' => 'text/tab-separated-values',
        'turbot' => 'image/florian',
        'twd' => 'application/vnd.simtech-mindmapper',
        'twds' => 'application/vnd.simtech-mindmapper',
        'txt' => 'text/plain',
        'u32' => 'application/x-authorware-bin',
        'ufd' => 'application/vnd.ufdl',
        'ufdl' => 'application/vnd.ufdl',
        'uil' => 'text/x-uil',
        'uni' => 'text/uri-list',
        'unis' => 'text/uri-list',
        'unv' => 'application/i-deas',
        'uri' => 'text/uri-list',
        'uris' => 'text/uri-list',
        'urls' => 'text/uri-list',
        'ustar' => 'multipart/x-ustar',
        'uu' => 'text/x-uuencode',
        'uue' => 'text/x-uuencode',
        'uva' => 'audio/vnd.dece.audio',
        'uvd' => 'application/vnd.dece.data',
        'uvf' => 'application/vnd.dece.data',
        'uvg' => 'image/vnd.dece.graphic',
        'uvh' => 'video/vnd.dece.hd',
        'uvi' => 'image/vnd.dece.graphic',
        'uvm' => 'video/vnd.dece.mobile',
        'uvp' => 'video/vnd.dece.pd',
        'uvs' => 'video/vnd.dece.sd',
        'uvt' => 'application/vnd.dece.ttml+xml',
        'uvu' => 'video/vnd.uvvu.mp4',
        'uvv' => 'video/vnd.dece.video',
        'uvva' => 'audio/vnd.dece.audio',
        'uvvd' => 'application/vnd.dece.data',
        'uvvf' => 'application/vnd.dece.data',
        'uvvg' => 'image/vnd.dece.graphic',
        'uvvh' => 'video/vnd.dece.hd',
        'uvvi' => 'image/vnd.dece.graphic',
        'uvvm' => 'video/vnd.dece.mobile',
        'uvvp' => 'video/vnd.dece.pd',
        'uvvs' => 'video/vnd.dece.sd',
        'uvvt' => 'application/vnd.dece.ttml+xml',
        'uvvu' => 'video/vnd.uvvu.mp4',
        'uvvv' => 'video/vnd.dece.video',
        'uvvx' => 'application/vnd.dece.unspecified',
        'uvvz' => 'application/vnd.dece.zip',
        'uvx' => 'application/vnd.dece.unspecified',
        'uvz' => 'application/vnd.dece.zip',
        'vcd' => 'application/x-cdlink',
        'vcs' => 'text/x-vcalendar',
        'vda' => 'application/vda',
        'vdo' => 'video/vdo',
        'vew' => 'application/groupwise',
        'viv' => 'video/vnd.vivo',
        'vivo' => 'video/vnd.vivo',
        'vmd' => 'application/vocaltec-media-desc',
        'vmf' => 'application/vocaltec-media-file',
        'voc' => 'audio/x-voc',
        'vor' => 'application/vnd.stardivision.writer',
        'vos' => 'video/vosaic',
        'vox' =>
        array (
            0 => 'application/x-authorware-bin',
            1 => 'audio/voxware',
        ),
        'vqe' => 'audio/x-twinvq-plugin',
        'vqf' => 'audio/x-twinvqv',
        'vql' => 'audio/x-twinvq-plugin',
        'vrml' =>
        array (
            0 => 'model/vrml',
            1 => 'x-world/x-vrml',
        ),
        'vrt' => 'x-world/x-vrt',
        'vsd' =>
        array (
            0 => 'application/vnd.visio',
            1 => 'application/x-visio',
        ),
        'vss' =>
        array (
            0 => 'application/vnd.visio',
            1 => 'application/x-visio',
        ),
        'vst' =>
        array (
            0 => 'application/vnd.visio',
            1 => 'application/x-visio',
        ),
        'vsw' =>
        array (
            0 => 'application/vnd.visio',
            1 => 'application/x-visio',
        ),
        'w3d' => 'application/x-director',
        'w60' => 'application/wordperfect6.0',
        'w61' => 'application/wordperfect6.1',
        'w6w' => 'application/msword',
        'wav' => 'audio/x-wav',
        'wb1' => 'application/x-qpro',
        'wbmp' => 'image/vnd.wap.wbmp',
        'wcm' => 'application/vnd.ms-works',
        'wdb' => 'application/vnd.ms-works',
        'web' => 'application/vnd.xara',
        'wiz' => 'application/msword',
        'wk1' => 'application/x-123',
        'wks' => 'application/vnd.ms-works',
        'wmf' =>
        array (
            0 => 'application/x-msmetafile',
            1 => 'windows/metafile',
        ),
        'wml' => 'text/vnd.wap.wml',
        'wmlc' => 'application/vnd.wap.wmlc',
        'wmls' => 'text/vnd.wap.wmlscript',
        'wmlsc' => 'application/vnd.wap.wmlscriptc',
        'wmv' =>
        array (
            0 => 'video/x-ms-asf',
            1 => 'video/x-ms-wmv',
        ),
        'wmz' => 'application/x-msmetafile',
        'word' => 'application/msword',
        'wp' => 'application/wordperfect',
        'wp5' => 'application/wordperfect6.0',
        'wp6' => 'application/wordperfect',
        'wpd' => 'application/x-wpwin',
        'wps' => 'application/vnd.ms-works',
        'wq1' => 'application/x-lotus',
        'wri' => 'application/x-wri',
        'wrl' =>
        array (
            0 => 'model/vrml',
            1 => 'x-world/x-vrml',
        ),
        'wrz' => 'x-world/x-vrml',
        'wsc' => 'text/scriplet',
        'wsrc' => 'application/x-wais-source',
        'wtk' => 'application/x-wintalk',
        'x-png' => 'image/png',
        'x32' => 'application/x-authorware-bin',
        'x3d' => 'model/x3d+xml',
        'x3db' => 'model/x3d+binary',
        'x3dbz' => 'model/x3d+binary',
        'x3dv' => 'model/x3d+vrml',
        'x3dvz' => 'model/x3d+vrml',
        'x3dz' => 'model/x3d+xml',
        'xbm' => 'image/xbm',
        'xdr' => 'video/x-amt-demorun',
        'xgz' => 'xgl/drawing',
        'xht' => 'application/xhtml+xml',
        'xhtml' => 'application/xhtml+xml',
        'xhvml' => 'application/xv+xml',
        'xif' => 'image/vnd.xiff',
        'xl' => 'application/excel',
        'xla' =>
        array (
            0 => 'application/vnd.ms-excel',
            1 => 'application/x-msexcel',
        ),
        'xlb' => 'application/x-excel',
        'xlc' =>
        array (
            0 => 'application/vnd.ms-excel',
            1 => 'application/x-excel',
        ),
        'xld' => 'application/x-excel',
        'xlk' => 'application/x-excel',
        'xll' => 'application/x-excel',
        'xlm' =>
        array (
            0 => 'application/vnd.ms-excel',
            1 => 'application/x-excel',
        ),
        'xls' =>
        array (
            0 => 'application/x-msexcel',
            1 => 'text/plain',
        ),
        'xlsx' => 'application/octet-stream',
        'xlt' =>
        array (
            0 => 'application/vnd.ms-excel',
            1 => 'application/x-excel',
        ),
        'xlv' => 'application/x-excel',
        'xlw' =>
        array (
            0 => 'application/vnd.ms-excel',
            1 => 'application/x-msexcel',
        ),
        'xm' => 'audio/xm',
        'xml' =>
        array (
            0 => 'application/xml',
            1 => 'text/xml',
        ),
        'xmz' => 'xgl/movie',
        'xpix' => 'application/x-vnd.ls-xpix',
        'xpm' => 'image/xpm',
        'xpw' => 'application/vnd.intercon.formnet',
        'xpx' => 'application/vnd.intercon.formnet',
        'xsl' => 'application/xml',
        'xsr' => 'video/x-amt-showrun',
        'xvm' => 'application/xv+xml',
        'xvml' => 'application/xv+xml',
        'xwd' => 'image/x-xwindowdump',
        'xyz' => 'chemical/x-pdb',
        'z' => 'application/x-compressed',
        'z1' => 'application/x-zmachine',
        'z2' => 'application/x-zmachine',
        'z3' => 'application/x-zmachine',
        'z4' => 'application/x-zmachine',
        'z5' => 'application/x-zmachine',
        'z6' => 'application/x-zmachine',
        'z7' => 'application/x-zmachine',
        'z8' => 'application/x-zmachine',
        'zip' => 'multipart/x-zip',
        'zir' => 'application/vnd.zul',
        'zirz' => 'application/vnd.zul',
        'zoo' => 'application/octet-stream',
        'zsh' => 'text/x-script.zsh',
        'dat' => 'text/plain',
        'pmp' =>
        array (
            0 => 'application/xml',
            1 => 'text/xml',
            2 => 'text/html',
        ),
        'pmt' => 'text/plain',
        'pmx' =>
        array (
            0 => 'application/xml',
            1 => 'text/xml',
            2 => 'text/html',
        ),
        'pmx2' =>
        array (
            0 => 'application/xml',
            1 => 'text/xml',
            2 => 'text/html',
        ),
        'po' => 'text/x-po',
    );

    /**
     * return true if the element is valide
     *
     * @param   string $value value to test
     * @return  bool true if the element is valide
     */
    /*public function isValid($value)
    {
        if (!is_array($value) && empty($value)) {
            return true;
        }

        if (is_array($value)) {
            $pathfinfo = pathinfo($value['name']);
            $extension = strtolower($pathfinfo['extension']);

            $authorizedMimes = $this->mimesMap[$extension];
            $fileMime = mime_content_type($value['tmp_name']);

            if (is_array($authorizedMimes) === true) {
                foreach ($authorizedMimes as $mime) {
                    if ($mime == $fileMime) {
                        return true;
                    }
                }
            } else {
                if ($authorizedMimes == $fileMime) {
                    return true;
                }
            }
        }

        return false;
    }*/

    public function isValid($value)
    {
        if (!is_array($value) && empty($value)) {
            return true;
        }

        $valid = true;
        $values = $value;

        foreach ($values as $fileKey => $fileName) {
            $pathInfo = pathinfo($fileName);
            $filePath = $this->element->getTemporaryDirectory() . $fileName;
            $fileMime = mime_content_type($filePath);
            $extension = strtolower($pathInfo['extension']);
            $authorizedMimes = $this->mimesMap[$extension];

            if (is_array($authorizedMimes)) {
                $mimeValid = in_array($fileMime, $authorizedMimes);
            } else {
                $mimeValid = ($authorizedMimes == $fileMime);
            }

            if (!$mimeValid) {
                $this->element->removeFileFromValue($fileName);
                $this->form->getErrorManager()->add(
                    str_replace('%file_name%', $fileName, $this->message),
                    $this->element->getName()
                );
                $valid = false;
            }
        }

        return $valid;
    }
}
