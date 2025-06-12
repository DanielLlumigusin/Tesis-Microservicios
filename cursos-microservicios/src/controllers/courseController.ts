import type { Request, Response } from 'express';
import { Course } from '../models/Course';

// Obtener todos los cursos
export const getCourses = async (_req: Request, res: Response) => {
    try {
        const courses = await Course.find().lean();
        return res.status(200).json(courses);
    } catch (error) {
        console.error('Error fetching courses:', error);
        return res.status(500).json({ message: 'Internal server error' });
    }
};

// Crear un nuevo curso
export const createCourse = async (req: Request, res: Response) => {
    try {
        const course = new Course(req.body);
        await course.save();
        return res.status(201).json(course);
    } catch (error) {
        console.error('Error creating course:', error);
        return res.status(500).json({ message: 'Internal server error' });
    }
};

// Actualizar un curso existente
export const updateCourse = async (req: Request, res: Response) => {
    try {
        const course = await Course.findById(req.body.id);
        if (!course) {
            return res.status(404).json({ message: 'Course not found' });
        }

        course.fullname = req.body.fullname ?? course.fullname;
        course.shortname = req.body.shortname ?? course.shortname;
        course.summary = req.body.summary ?? course.summary;
        course.startdate = req.body.startdate ?? course.startdate;
        course.enddate = req.body.enddate ?? course.enddate;

        await course.save();
        return res.status(200).json(course);
    } catch (error) {
        console.error('Error updating course:', error);
        return res.status(500).json({ message: 'Internal server error' });
    }
};

// Eliminar un curso
export const deleteCourse = async (req: Request, res: Response) => {
    try {
        const { id } = req.body;
        const result = await Course.findByIdAndDelete(id);

        if (!result) {
            return res.status(404).json({ message: 'Course not found' });
        }

        return res.status(200).json({ message: 'Course deleted successfully' });
    } catch (error) {
        console.error('Error deleting course:', error);
        return res.status(500).json({ message: 'Internal server error' });
    }
};

// Obtener contenidos del curso (simulado, ya que no hay esquema de secciones/módulos)
export const getCourseContents = async (req: Request, res: Response) => {
    try {
        const { id } = req.params;
        const course = await Course.findById(id).lean();

        if (!course) {
            return res.status(404).json({ message: 'Course not found' });
        }

        // Suponiendo que más adelante se relacione con secciones/módulos
        return res.status(200).json({
            id: course._id,
            fullname: course.fullname,
            contents: [] // Aquí irían secciones y módulos relacionados
        });
    } catch (error) {
        console.error('Error getting course contents:', error);
        return res.status(500).json({ message: 'Internal server error' });
    }
};
