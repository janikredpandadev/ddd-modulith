<?php

declare(strict_types=1);

namespace App\Search\Application\Query\Book\GetBookById;

use App\Common\Application\Query\IQueryHandler;

final readonly class GetBookByIdHandler implements IQueryHandler
{
    public function __construct(private IGetBookById $repository)
    {
    }

    public function __invoke(GetBookByIdQuery $query): BookDto
    {
        return $this->repository->getBookById($query->id);
    }
}
