import mongoose from 'mongoose';

const CourseSchema = new mongoose.Schema({
    id: { type: String, required: true, unique: true },
    category: { type: String, required: true },
    fullname: { type: String, required: true },
    shortname: { type: String },
    summary: { type: String },
    visible: { type: Number },
    startdate: { type: Number },
    enddate: { type: Number }
}, { timestamps: true });

export const Course = mongoose.model('Course', CourseSchema);
