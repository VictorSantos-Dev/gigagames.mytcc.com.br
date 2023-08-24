<?php
include_once('../conexao.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');

$query_selectUser = "SELECT * FROM users WHERE id_user = " . $_GET['id_user'];
$selectUser = mysqli_query($conexao, $query_selectUser);
$arrayUser =  mysqli_fetch_array($selectUser);

$nomeCliente =  $arrayUser['first_name'];
$emailCliente =  $arrayUser['e_mail'];
$senhaCliente =  $arrayUser['pass_hash'];
$cad = 'cad';
?>

<?php $emailBody = <<<EOF
<!DOCTYPE html>
<html>

<head>
    <title>Confirme seu Acesso</title>
    <meta name=x-apple-disable-message-reformatting>
    <meta http-equiv=X-UA-Compatible>
    <meta charset=utf-8>
    <meta name=viewport content=target-densitydpi=device-dpi>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        table {
            border-collapse: separate;
            table-layout: fixed;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        table td {
            border-collapse: collapse;
        }
        .ExternalClass {
            width: 100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }
        * {
            line-height: inherit;
            text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -o-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        html {
            -webkit-text-size-adjust: none !important;
        }
        img+div {
            display: none;
            display: none !important;
        }
        img {
            Margin: 0;
            padding: 0;
            -ms-interpolation-mode: bicubic;
        }
        h1, h2, h3, p, a {
            font-family: inherit;
            font-weight: inherit;
            font-size: inherit;
            line-height: 1;
            color: inherit;
            background: none;
            overflow-wrap: normal;
            white-space: normal;
            word-break: break-word;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        h1, h2, h3, p {
            min-width: 100% !important;
            width: 100% !important;
            max-width: 100% !important;
            display: inline-block !important;
            border: 0;
            padding: 0;
            margin: 0;
        }
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        a[href^="mailto"], a[href^="tel"], a[href^="sms"] {
            color: inherit !important;
            text-decoration: none !important;
        }
        @media only screen and (min-width: 481px) {
            .hd {
                display: none !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .hm {
                display: none !important;
            }
        }
        [style*="Fira Sans"] {
            font-family: 'Fira Sans', sans-serif !important;
        }
        @media only screen and (min-width: 481px) {
            .t11, .t6 {
                padding-top: 50px !important;
                padding-bottom: 30px !important
            }
            .t38, .t40 {
                padding: 0 50px !important
            }
            .t44 {
                width: 80px !important
            }
            .t67, .t69 {
                padding: 50px 14px !important
            }
            .t79 {
                line-height: 52px !important;
                font-size: 48px !important;
                mso-text-raise: 1px !important
            }
            .t80 {
                mso-line-height-alt: 30px !important;
                line-height: 30px !important
            }
            .t83 {
                width: 260px !important;
                line-height: 60px !important;
                mso-text-raise: 12px !important
            }
            .t88 {
                line-height: 60px !important;
                mso-text-raise: 12px !important
            }
            .t89 {
                line-height: 60px !important;
                font-size: 21px !important;
                mso-text-raise: 12px !important
            }
            .t91 {
                width: 260px !important;
                line-height: 60px !important;
                mso-text-raise: 12px !important
            }
            .t93 {
                mso-line-height-alt: 50px !important;
                line-height: 50px !important
            }
            .t130 {
                line-height: 23px !important;
                mso-text-raise: 3px !important
            }
            .t131 {
                mso-line-height-alt: 30px !important;
                line-height: 30px !important
            }
            .t140 {
                line-height: 34px !important;
                font-size: 22px !important;
                mso-text-raise: 4px !important
            }
            .t141 {
                mso-line-height-alt: 30px !important;
                line-height: 30px !important
            }
            .t150 {
                line-height: 27px !important;
                font-size: 14px !important;
                mso-text-raise: 4px !important
            }
            .t151 {
                mso-line-height-alt: 30px !important;
                line-height: 30px !important
            }
            .t160 {
                line-height: 27px !important;
                font-size: 14px !important;
                mso-text-raise: 4px !important
            }
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;700&display=swap" rel="stylesheet" type="text/css">

    <style type="text/css">
        .t11,.t6{padding-top:50px !important;padding-bottom:30px !important}.t38,.t40{padding:0 50px !important}.t44{width:80px !important}.t67,.t69{padding:50px 14px !important}.t79{line-height:52px !important;font-size:48px !important;mso-text-raise:1px !important}.t80{mso-line-height-alt:30px !important;line-height:30px !important}.t83{width:260px !important;line-height:60px !important;mso-text-raise:12px !important}.t88{line-height:60px !important;mso-text-raise:12px !important}.t89{line-height:60px !important;font-size:21px !important;mso-text-raise:12px !important}.t91{width:260px !important;line-height:60px !important;mso-text-raise:12px !important}.t93{mso-line-height-alt:50px !important;line-height:50px !important}.t130{line-height:23px !important;mso-text-raise:3px !important}.t131{mso-line-height-alt:30px !important;line-height:30px !important}.t140{line-height:34px !important;font-size:22px !important;mso-text-raise:4px !important}.t141{mso-line-height-alt:30px !important;line-height:30px !important}.t150{line-height:27px !important;font-size:14px !important;mso-text-raise:4px !important}.t151{mso-line-height-alt:30px !important;line-height:30px !important}.t160{line-height:27px !important;font-size:14px !important;mso-text-raise:4px !important}
    </style>

    <script type="application/ld+json">[{"@context":"http://schema.org/","@type":"Organization","logo":"https://storage.googleapis.com/uploads.tabular.email/u%2F9d6387d7-0cc6-423b-9ba4-957f4617d395%2F9d9ff9ba-3c5a-4cc8-92cf-48fd92ccd81f.png"},{"@context":"http://schema.org/","@type":"EmailMessage","subjectLine":"Confirme Sua Conta"}]</script>
</head>

<body class=t0 style="min-width:100%;Margin:0px;background-color:#fff;">
    <div style="display:none; font-size:1px; color:#333333; line-height:1px; max-height:0px; max-width:0px; opacity:0; overflow:hidden;">Giga Games</div>
    <div style="font-size: 0px; line-height:0px; display: none; max-height: 0px; overflow: hidden;">
        &#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;
    </div>
    <div class=t1 style="background-color:#fff;">
        <table role=presentation width=100% cellpadding=0 cellspacing=0 border=0 align=center>
            <tr>
                <td class=t161 style="font-size:0;line-height:0;mso-line-height-rule:exactly;" valign=top align=center>
                    <table role=presentation width=100% cellpadding=0 cellspacing=0 border=0 align=center>
                        <tr>
                            <td>
                                <table class=t5 role=presentation cellpadding=0 cellspacing=0 align=center>
                                    <tr>
                                        <td class=t6 style="width:727px;padding:20px 10px 20px 10px;" width=747>
                                            <div class=t12 style="display:inline-table;width:100%;text-align:center;vertical-align:top;">
                                                <div class=t16 style="display:inline-table;text-align:initial;vertical-align:inherit;width:100%;max-width:600px;">
                                                    <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t18>
                                                        <tr>
                                                            <td class=t19 style="background-color:#000000;border-radius:8px 8px 8px 8px;">
                                                                <table role=presentation width=100% cellpadding=0 cellspacing=0>
                                                                    <tr>
                                                                        <td>
                                                                            <div class=t31 style="display:inline-table;width:100%;text-align:center;vertical-align:middle;">
                                                                                <div class=t35 style="display:inline-table;text-align:initial;vertical-align:inherit;width:100%;max-width:600px;">
                                                                                    <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t37>
                                                                                        <tr>
                                                                                            <td class=t38 style="border-bottom:1px solid #454545;padding:20px 30px 20px 30px;">
                                                                                                <table role=presentation width=100% cellpadding=0 cellspacing=0>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <table class=t43 role=presentation cellpadding=0 cellspacing=0 align=center>
                                                                                                                <tr>
                                                                                                                    <td class=t44 style="width:30px;padding:14px 0 14px 0;" width=80>
                                                                                                                        <a href=http://gigagames.mytcc.com.br/home/ style="font-size:0px;" target="_BLANK">
                                                                                                                            <img class=t50 style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width=80 src="http://www.gigagames.mytcc.com.br/images/logo/Logo_Azul_sFundo.png" />
                                                                                                                        </a>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class=t60 style="display:inline-table;width:100%;text-align:center;vertical-align:top;">
                                                                                <div class=t64 style="display:inline-table;text-align:initial;vertical-align:inherit;width:100%;max-width:718px;">
                                                                                    <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t66>
                                                                                        <tr>
                                                                                            <td class=t67 style="border-bottom:unset;padding:30px 30px 30px 30px;">
                                                                                                <table role=presentation width=100% cellpadding=0 cellspacing=0>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <table class=t72 role=presentation cellpadding=0 cellspacing=0 align=left>
                                                                                                                <tr>
                                                                                                                    <td class=t73 style="width:555px;" width=555>
                                                                                                                        <h1 class=t79 style="text-decoration:none;text-transform:none;color:#5A9BE6;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;font:normal 700 25px/33px sans-serif, 'Fira Sans';">
                                                                                                                            Seja Bem-Vindo a nossa plataforma, $nomeCliente!
                                                                                                                        </h1>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <div class=t131 style="mso-line-height-rule:exactly;mso-line-height-alt:20px;line-height:20px;font-size:1px;display:block;">
                                                                                                                &nbsp;
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <table class=t133 role=presentation cellpadding=0 cellspacing=0 align=left>
                                                                                                                <tr>
                                                                                                                    <td class=t134 style="width:30rem;">
                                                                                                                        <p class=t140 style="text-decoration:none;text-transform:none;color:#FFFFFF;text-align:left;mso-line-height-rule:exactly;mso-text-raise:3px;font:normal 500 18px/28px sans-serif, 'Fira Sans';">
                                                                                                                            E-mail: $emailCliente
                                                                                                                            <br>
                                                                                                                            Senha: $senhaCliente
                                                                                                                        </p>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <div class=t80 style="mso-line-height-rule:exactly;mso-line-height-alt:20px;line-height:20px;font-size:1px;display:block;">
                                                                                                                &nbsp;
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <table class=t82 role=presentation cellpadding=0 cellspacing=0 align=center>
                                                                                                                <tr>
                                                                                                                    <td class=t83 style="width:326px;background-color:#5A9BE6;text-align:center;line-height:50px;mso-line-height-rule:exactly;mso-text-raise:10px;border-radius:14px 14px 14px 14px;" width=260>
                                                                                                                        <a class=t89 href=http://www.gigagames.mytcc.com.br/home/ style="display:block;text-decoration:none;color:#000000;text-align:center;mso-line-height-rule:exactly;mso-text-raise:10px;font:normal 500 16px/50px sans-serif, 'Fira Sans';" target=_blank>Confirmar Cadastro</a>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <div class=t141 style="mso-line-height-rule:exactly;mso-line-height-alt:20px;line-height:20px;font-size:1px;display:block;">
                                                                                                                &nbsp;
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <table class=t143 role=presentation cellpadding=0 cellspacing=0 align=center>
                                                                                                                <tr>
                                                                                                                    <td class=t144 style="width:268px;" width=268>
                                                                                                                        <p class=t150 style="text-decoration:none;text-transform:none;color:#BDBDBD;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;font:normal 400 16px/23px sans-serif, 'Fira Sans';">
                                                                                                                            Esse e-mail é automático, apenas ignore.
                                                                                                                        </p>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class=t101 style="display:inline-table;width:100%;text-align:center;vertical-align:top;">
                                    <div class=t105 style="display:inline-table;text-align:initial;vertical-align:inherit;width:100%;max-width:600px;">
                                        <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t107>
                                            <tr>
                                                <td class=t108 style="padding:0 50px 0 50px;">
                                                    <table role=presentation width=100% cellpadding=0 cellspacing=0>
                                                        <tr>
                                                            <td>
                                                                <table class=t123 role=presentation cellpadding=0
                                                                    cellspacing=0 align=left>
                                                                    <tr>
                                                                        <td class=t124 style="width:420px;" width=420>
                                                                            <p class=t130 style="text-decoration:none;text-transform:none;color:#878787;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;font:normal 400 14px/22px sans-serif, 'Fira Sans';">
                                                                                A GigaGames é uma plataforma web que te
                                                                                oferece as melhores ofertas e promoções
                                                                                para que você possa desfrutar de tudo
                                                                                que ama sem sair do conforto da sua
                                                                                casa.
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class=t111 style="mso-line-height-rule:exactly;mso-line-height-alt:20px;line-height:20px;font-size:1px;display:block;">
                                                                    &nbsp;
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <table class=t113 role=presentation cellpadding=0 cellspacing=0 align=left>
                                                                    <tr>
                                                                        <td class=t114 style="width:420px;" width=420>
                                                                            <p class=t120 style="text-decoration:none;text-transform:none;color:#878787;text-align:left;mso-line-height-rule:exactly;mso-text-raise:3px;font:normal 400 14px/23px sans-serif, 'Fira Sans';">
                                                                                © 2022 GigaGames. Todos os direitos
                                                                                reservados.
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class=t93 style="mso-line-height-rule:exactly;mso-line-height-alt:20px;line-height:20px;font-size:1px;display:block;">
                                    &nbsp;
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
EOF;
?>