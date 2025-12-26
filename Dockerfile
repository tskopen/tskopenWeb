# Use Node.js base image
FROM node:20

# Create app directory
WORKDIR /node/

# Install dependencies
COPY package*.json ./
RUN npm install

# Copy the rest of the app
COPY . .

# Expose port and run
EXPOSE 3000



