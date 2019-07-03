<!DOCTYPE html>
<html lang="en">
    <title>Relatório</title>
    <head> 
        
    </head>
    <body>
				<div align="center">
					<img src="imgs/logo.png"/ width="100" height="65"/> 
					<h1 align="center">Usuários Cadastrados</h1>
				</div>
            <table style=" text-indent: all; " >
                <thead >
                    <tr >
                        <th style="padding-right: 100">Nome</th>
                        
                        <th style="padding-right: 150">E-mail</th>
                        
                        <th style="padding-right: 30">Matrícula</th>
                        
                        <th style="padding-right: 20">Tipo</th>

                        <th>Pontos</th>
                        
                    </tr>
                </thead>
                <tbody>
                	@foreach($users as $dados)
                	<tr>
                		
                		<td>{{$dados->name}}</td>

                		<td>{{$dados->email}}</td>
                		<td>{{$dados->registro}}</td>
                		@if($dados->tipo == 0)
                			<td>Aluno</td>
                		@endif
                		@if($dados->tipo == 1)
                			<td>Professor</td>
                		@endif
                		
                		<td>0</td>
                		
                	</tr>
                	@endforeach
                    

                    

                </tbody>
            </table>
        
        <br>
        
    </body>
</html>