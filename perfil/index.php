<html>
	<head>
			<style>
				body{
					background-color:  #ffe6f3;
					
				}

				div{
					margin-right: auto;
					text-align: left;
					padding-left: 43%;
					width: 250px;


				}
				img{
					  display: block;
					  margin-left: auto;
					  margin-right: auto;
					  margin-top: 5%;
					  width: 200px;
					  height: 200px;
				}

				h1{
					font-size: 40px;
				}
				b{
					font-size: 18px;
				}
			</style>
	</head>
	<body>

        <?php
        		$v1 = array(
				    'img' => 'https://66.media.tumblr.com/6a5dac7991a5160898f648f1a3c02eda/tumblr_npfs6yj2QJ1uwv8j2o6_250.png',
				    'nome' => 'Ana Clara',
				    'apelido' => 'Gira',
				    'endereço' => array('Avenida W. Pires', 'Lagoinha', 'Guanambi'),
				    'email' => 'anav.p.04@gmail.com',
				    'curso' => 'Informática p/ internet',
				    'disciplina' => 'Programação de Sistemas para Web I',

			   );


        		echo('<img src=' . $v1['img'] .'>');
        		echo('<div> <h1>'.$v1['nome'].'</h1>');
        		echo('<b> Apelido: </b>'.$v1['apelido']);
        		echo('<br>');
        		echo('<b> Endereço </b>');
        		echo('<br>');
        		echo('<b> Rua: </b>'.$v1['endereço'][0]);
        		echo('<br>');
        		echo('<b> Bairro: </b>'.$v1['endereço'][1]);
        		echo('<br>');
        		echo('<b> Cidade: </b>'.$v1['endereço'][2]);
        		echo('<br>');
        		echo('<b> Email: </b>'.$v1['email']);
        		echo('<br>');
        		echo('<b> Curso: </b>'.$v1['curso']);
        		echo('<br>');
        		echo('<b>Disciplina: </b>'.$v1['disciplina']. '</div>');

        ?>


    </body>
</html>
