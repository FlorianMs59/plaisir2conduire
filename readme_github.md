# Pour récupérer les informations de git sans effacer son travail

## Dans le terminal

```fix 
- git checkout master
- git pull origin master
- git checkout florian
- git rebase master
- git add .
- git rebase --continue
```
## Corriger les conflits (si il y a)
```fix 
Quand il y a des changements:

- :wq    pour pouvoir quitter
```