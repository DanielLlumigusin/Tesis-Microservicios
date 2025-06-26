import { Router } from 'express';
import {
  getCourses,
  getCourseById,
  createCourse,
  updateCourseById,
  deleteCourse,
} from '../controllers/courseController';

const router = Router();

router.get('/cursos', getCourses);
router.get('/cursos/:id', getCourseById);
router.post('/cursos', createCourse);
router.put('/cursos/:id', updateCourseById);
router.delete('/cursos/:id', deleteCourse);

export default router;
