<html>

<head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bienvenue sur notre plateforme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight:
                    400;
                src: local('Source Sans Pro Regular'),
                    local('SourceSansPro-Regular'),
                    url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format('woff');
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 700;
                src: local('Source Sans Pro
 Bold'), local(' SourceSansPro-Bold'),
 url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format('woff');
                }
            }

            body, table, td, a {
                -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;
            }

            / table, td {
                mso-table-rspace: 0pt; mso-table-lspace: 0pt;
            }

            img {
                -ms-interpolation-mode: bicubic;
            }

            a[x-apple-data-detectors] {
                font-family: inherit !important; font-size: inherit !important; font-weight: inherit !important; line-height: inherit !important; color: inherit !important; text-decoration: none !important;
            }

            div[style*="margin: 16px 0;"] {
                margin: 0 !important;
            }

            body {
                width: 100% !important; height: 100% !important; padding: 0 !important; margin: 0 !important;
            }

            table {
                border-collapse: collapse !important;
            }

            a {
                color: #F66884;
            }

            img {
                height: auto; line-height: 100%; text-decoration: none; border: 0;
                outline: none;
            }
    </style>

</head>
<div style="background-color: #e9ecef;">

    <!-- start preheader -->
    <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
        A preheader is the short summary text that follows the subject line
        when an email is viewed in the inbox.
    </div>
    <!-- end preheader -->

    <!-- start body -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">

        <!-- start logo -->
        <tr>
            <td align="center" bgcolor="#e9ecef">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                    
                        <td align="center" valign="top" style="padding: 36px 24px;">
                            <img src="https://pbaeditions.org/assets/site-images/logo.jpg" alt="Logo" border="0" width="100" style="display: block; width: 60px; max-width: 60px; min-width: 60px;">
                            
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- end logo -->

        <!-- start hero -->
        <tr>
            <td align="center" bgcolor="#e9ecef">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                            <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Confirmation de compte </h1>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- end hero -->

        <!-- start copy block -->
        <tr>
            <td align="center" bgcolor="#e9ecef">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                    <!-- start copy -->
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                            <p style="margin: 0;">
                            Cher(e)  {{ $userData['fullname'] }}, </p>
                            <p style="margin: 0;">
                            Nous vous envoyons ce mail suite à la création de votre compte d'utilisateur du site web de PBA. 
                            Veuillez vous connecter en utilisant votre adresse mail et le mot de passe si après: 
                            <br />
                            PBA2023
                            </p>
                            <br />
                        <p>
                            <a href="https://pbaeditions.org/login"> Se conntecter</a>
                        </p>
                           
                        </td>
                    </tr>
                    <!-- end copy -->


                    <!-- start copy -->
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                            <p style="margin: 0;">Cordialement,<br />
                               Email : <a href="mailto:{{ $userData['email'] }}">{{ $userData['email'] }}</a>
                            </p>
                        </td>
                    </tr>
                    <!-- end copy -->

                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- end copy block -->

        <!-- start footer -->
        <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                    <!-- start unsubscribe -->
                    <tr>
                        <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                            <img src="https://pbaeditions.org/assets/site-images/logo.jpg" alt="Logo" border="0" width="75" style="display: block; width: 75px; max-width: 75px; min-width: 75px;" />
                        </td>
                    </tr>

                    <!-- start unsubscribe -->
                    <tr>
                        <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                            <p style="margin: 0;">© Editions Presses Bibliques Africaines, Calavi Zopah,
                                Rue du Supermarché du Pont.</p>
                        </td>
                    </tr>
                    <!-- end unsubscribe -->

                    <!-- start permission -->
                    <tr>
                        <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                            <p style="margin: 0;">
                                Ce mail a été envoyé par <a href="mailto:info@pbaeditions.org">info@pbaeditions.org</a>
                            </p>
                        </td>
                    </tr>
                    <!-- end permission -->

                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- end footer -->

    </table>
    <!-- end body -->

</div>

</html>