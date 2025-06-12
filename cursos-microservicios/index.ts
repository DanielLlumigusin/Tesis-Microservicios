// app.ts
import express from 'express';
import courseRoutes from './src/routes/courseRoutes';
import connectDB from './src/config/database';

const app = express();
app.use(express.json());
app.use('/courses', courseRoutes);

connectDB();

app.listen(3000, () => console.log('Server is running'));
