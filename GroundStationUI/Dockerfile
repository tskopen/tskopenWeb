FROM node:alpine

WORKDIR /app

COPY package*.json ./
RUN npm install

# Copy the rest of the app
COPY . .

EXPOSE 3000

CMD ["node", "server.js"]
