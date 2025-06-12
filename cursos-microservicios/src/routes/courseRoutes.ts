import { Router } from 'express';
import {
  getCourses,
  createCourse,
  updateCourse,
  deleteCourse,
  getCourseContents,
} from '../controllers/courseController';

const router = Router();

router.get('/', getCourses);
router.post('/', createCourse);
router.put('/', updateCourse);
router.delete('/', deleteCourse);
router.get('/:id/contents', getCourseContents);

export default router;
