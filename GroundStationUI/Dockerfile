FROM node:alpine
RUN echo "stage1 Node"

WORKDIR /app


COPY package*.json ./app

RUN npm install

# Copy the rest of the app
COPY . ./app

EXPOSE 3000

CMD ["node", "server.js"]
