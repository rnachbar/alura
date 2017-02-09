cls 
echo Deseja mesmo fazer o backup?
pause

echo Fazendo backup...

cd C:\Users\Raphael Nachbar\Desktop

mkdir backup

cd DESENVOLVIMENTO\DEV\uteis\alura\cursos\windows\introducao-ao-prompt\script

xcopy /e /y C:\Users\Raphael Nachbar\Desktop\DESENVOLVIMENTO\DEV\uteis\alura\cursos\windows\introducao-ao-prompt\script C:\Users\Raphael Nachbar\Desktop\DESENVOLVIMENTO\DEV\uteis\alura\cursos\windows\introducao-ao-prompt\backup

echo Listando arquivos do backup

