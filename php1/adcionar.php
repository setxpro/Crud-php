<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Usuário</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <h1>Editar Cadastro</h1>
      <form method="POST" action="adcionar_action.php">
        <label>
          Nome:</br>
          <input type="text" name="nome">
        </label></br></br>

        <label>
          Idade:</br>
          <input type="number" name="idade" class="idade">
        </label></br></br>

        <label>
          CPF:</br>
          <input type="number" name="cpf" class="cpf">
      </label></br></br>

      <label>
        Email:</br>
        <input type="email" name="email">
      </label></br></br>
      <label>
          <input type="checkbox" name="checkbox" required />
          Declaro que li e aceito os <a href="https://faq.whatsapp.com/general/security-and-privacy/were-updating-our-terms-and-privacy-policy?campaign_id=12079952625&extra_1=s%7Cc%7C499661728996%7Cb%7C%2Btermos%20%2Bde%20%2Bservi%C3%A7o%20%2Bdo%20%2Bwhatsapp%7C&placement=&creative=499661728996&keyword=%2Btermos%20%2Bde%20%2Bservi%C3%A7o%20%2Bdo%20%2Bwhatsapp&partner_id=googlesem&extra_2=campaignid%3D12079952625%26adgroupid%3D115882151029%26matchtype%3Db%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-1133279421288%26loc_physical_ms%3D1001655%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D">termos de uso!</a>
      </label></br></br>

        <input type="submit" name="button" value="Cadastrar" class="button">
    </form>
  </div>
</body>
</html>