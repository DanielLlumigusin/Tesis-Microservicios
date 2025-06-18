import mongoose from 'mongoose';

const connectDB = async () => {
    try {
        const mongoURI = process.env.MONGO_URI || 'mongodb://mongodb-cursos:27017/cursosdb';

        await mongoose.connect(mongoURI);
        console.log('MongoDB conexión exitosa');
    } catch (error) {
        console.error('MongoDB error de conexión', error);
        process.exit(1);
    }
};

export default connectDB;
