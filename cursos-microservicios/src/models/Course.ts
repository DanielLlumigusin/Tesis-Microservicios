import mongoose from 'mongoose';

const CourseSchema = new mongoose.Schema({
    fullname: { type: String, required: true },
    shortname: { type: String },
    summary: { type: String },
    startdate: { type: Date },
    enddate: { type: Date }
}, { timestamps: true });

export const Course = mongoose.model('Course', CourseSchema);
