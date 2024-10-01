# Utiliser l'image officielle Node.js comme base
FROM node:current-alpine

# Créer un répertoire de travail
WORKDIR /usr/src/app

# Copier les fichiers package.json et package-lock.json (ou yarn.lock) si disponible
COPY package*.json ./

# Installer les dépendances de l'application
RUN npm install

# Copier le reste des fichiers de l'application
COPY . .

# Construire l'application React pour la production
RUN npm run build

# Utiliser une image NGINX légère pour servir les fichiers statiques
FROM nginx:alpine

# Copier les fichiers de build de l'application React dans le répertoire NGINX
COPY --from=0 /usr/src/app/build /usr/share/nginx/html

# Exposer le port que NGINX utilise
EXPOSE 80

# Commande par défaut pour démarrer NGINX
CMD ["nginx", "-g", "daemon off;"]